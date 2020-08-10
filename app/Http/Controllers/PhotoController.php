<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Photos\Library\V1\PhotosLibraryClient;
use Google\Photos\Library\V1\PhotosLibraryResourceFactory;
use Google\Auth\OAuth2;
use App\Services\AuthGoogleService;
use App\Services\PhotoGoogleService;
use App\Model\OAuthGoogle;
use App\Model\MediaItemsGoogle;
use File;


class PhotoController extends Controller
{
	private $authGoogle;

	public function __construct(AuthGoogleService $authGoogle, PhotoGoogleService $photo)
    {
        $this->authGoogle = $authGoogle;
        $this->photo 	  = $photo;
    }

    public function authGoogle()
    {
    	try {
			$clientSecretJson = $this->parseClientSecret();
        	$clientId = $clientSecretJson['client_id'];
        	$clientSecret = $clientSecretJson['client_secret'];

			$redirectURI = 'http://localhost:4200';

    		$scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];

			$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
    		// The authorization URI will, upon redirecting, return a parameter called code.
	    	$authenticationUrl = $oauth2->buildFullAuthorizationUri(['access_type' => 'offline']);
	    	$host = $authenticationUrl->getHost();
	    	$path = $authenticationUrl->getPath();
	    	$query = $authenticationUrl->getQuery();

	    	$authURL = array('host' => $host.$path.'?'.$query);

	    	return $this->success($authURL, 'URL');
		} catch (\Google\ApiCore\ApiException $exception) {
		// Error during album creation
		} catch (\Google\ApiCore\ValidationException $e) {
		// Error during client creation
			echo $exception;
		}
    }
	public function getPhoto() 
	{
		try {
			//Get access token newest 
			$oauthGoogle = OAuthGoogle::orderBy('id', 'DESC')->first();
			$access_token =  $oauthGoogle->access_token;

			$clientSecretJson = $this->parseClientSecret();
        	$clientId = $clientSecretJson['client_id'];
        	$clientSecret = $clientSecretJson['client_secret'];

			$redirectURI = 'http://localhost:8000/callback';

    		$scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];

			$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
    		
		    if ($access_token) {
		        // Set up the Photos Library Client that interacts with the API
		        $response = $this->photo->listMediaItems($access_token); 
		        foreach ($response as $key => $mediaItem) {
		        	$mediaItems =  MediaItemsGoogle::firstOrNew([
		        		'id'=> $mediaItem->id,
				        'product_url' => $mediaItem->productUrl,
				        'base_url' => $mediaItem->baseUrl,
				        'mime_type' => $mediaItem->mimeType,
				        'width' => $mediaItem->mediaMetadata->width,
				        'height' => $mediaItem->mediaMetadata->height,
				        'creation_time' => $this->formatDateTime($mediaItem->mediaMetadata->creationTime),
				        'file_name' => $mediaItem->filename,
		        	]);
		        	// $mediaItems->save();
		        }
		        return $this->success($response, trans('messages.common.show_success'));   
		    } else {
		    	$this->errorServices(trans('message.token.token_expired'));
		    }
		} catch (\Google\ApiCore\ApiException $exception) {
		// Error during album creation
		} catch (\Google\ApiCore\ValidationException $e) {
		// Error during client creation
			echo $exception;
		}
	}

	public function google()
	{
		$scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];
       	$redirectURI = 'http://localhost:4200';	

		$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
		$oauth2->setCode($_GET['code']);

		//GENERATE ACCESS TOKEN
    	$authToken = $oauth2->fetchAuthToken();
    	$refreshToken = $authToken['access_token'];

    	//SAVE ACCESS TOKEN EXPIRED ? HOUR
    	$oauthGoogle = new OAuthGoogle([
            'code' => $_GET['code'],
            'access_token' => $refreshToken,
        ]);

        $oauthGoogle->save();

    	return $this->success(array('access_token' => $refreshToken), trans('messages.common.show_success'));
	}

	public function callback()
	{
		$scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];
       	$redirectURI = 'http://localhost:8000/callback';	
		$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
		$oauth2->setCode($_GET['code']);
    	$authToken = $oauth2->fetchAuthToken();

    	$refreshToken = $authToken['access_token'];

    	
		// return 1;
		// return 1
		// $scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];

  //      	$redirectURI = 'http://localhost:8000/google';	

		// $oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
		// if (!isset($_GET['code'])) {
		//     // The authorization URI will, upon redirecting, return a parameter called code.
		//     $authenticationUrl = $oauth2->buildFullAuthorizationUri(['access_type' => 'offline']);
		//     header("Location: " . filter_var($authenticationUrl, FILTER_SANITIZE_URL));
		//     exit();
		// } else {
	 //    	$oauth2->setCode($_GET['code']);
  //       	$authToken = $oauth2->fetchAuthToken();
  //       	$refreshToken = $authToken['access_token'];
  //       	$request->session()->put('access_token', $refreshToken);
  //       	$request->session()->put('code', $_GET['code']);
		// }
	}
}
