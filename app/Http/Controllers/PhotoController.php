<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Photos\Library\V1\PhotosLibraryClient;
use Google\Photos\Library\V1\PhotosLibraryResourceFactory;
use Google\Auth\OAuth2;
use App\Services\AuthGoogleService;
use File;

class PhotoController extends Controller
{
	private $authGoogle;

	public function __construct(AuthGoogleService $authGoogle)
    {
        $this->authGoogle = $authGoogle;
    }

	public function getPhoto(Request $request) 
	{
		try {
			$clientSecretJson = json_decode(File::get(storage_path('../credentials.json')),true)['web'];
        	$clientId = $clientSecretJson['client_id'];
        	$clientSecret = $clientSecretJson['client_secret'];

			$redirectURI = 'http://localhost:8000/google';
    		$scopes	= ['https://www.googleapis.com/auth/photoslibrary'];
			$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);

    		
		    if ($request->session()->has('access_token') && $request->session()->get('access_token')) {
		        $authCredentials = new UserRefreshCredentials(
				            $scopes,
				            [
				                'client_id' => $clientId,
				                'client_secret' => $clientSecret,
				                'refresh_token' => session()->get('access_token'),
				            ]
				        );        
		        // Set up the Photos Library Client that interacts with the API
				$photosLibraryClient = new PhotosLibraryClient(['credentials' => $authCredentials]);
		        $response = $photosLibraryClient->listAlbums();
		        
		        foreach ($response->iterateAllElements() as $res) {
		        	$baseUrl = $res->getId();
		        	var_dump($baseUrl);
		        	var_dump('11111111111111111111');
		        	// $arrBaseUrl[] = $baseUrl;
		        }

		   
		    } else {
		    	// The authorization URI will, upon redirecting, return a parameter called code.
		    	$authenticationUrl = $oauth2->buildFullAuthorizationUri(['access_type' => 'offline']);
		        header("Location: " . filter_var($authenticationUrl, FILTER_SANITIZE_URL));
		        exit();
		    }
		} catch (\Google\ApiCore\ApiException $exception) {
		// Error during album creation
		} catch (\Google\ApiCore\ValidationException $e) {
		// Error during client creation
			echo $exception;
		}
	}

	public function google(Request $request)
	{
		session()->put('testSession', 'codecodecode');
		$scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];

       	$redirectURI = 'http://localhost:8000/google';	

		$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
		if (!isset($_GET['code'])) {
		    // The authorization URI will, upon redirecting, return a parameter called code.
		    $authenticationUrl = $oauth2->buildFullAuthorizationUri(['access_type' => 'offline']);
		    header("Location: " . filter_var($authenticationUrl, FILTER_SANITIZE_URL));
		    exit();
		} else {
	    	$oauth2->setCode($_GET['code']);
        	$authToken = $oauth2->fetchAuthToken();
        	$refreshToken = $authToken['access_token'];
        	$request->session()->put('access_token', $refreshToken);
        	$request->session()->put('code', $_GET['code']);
		}
	}

	public function callback()
	{
		dd('call backkkkk');
		$scopes	= [ 'https://www.googleapis.com/auth/photoslibrary'];

       	$redirectURI = 'http://localhost:8000/google';	

		$oauth2 = $this->authGoogle->setAuthorParam($scopes, $redirectURI);
		if (!isset($_GET['code'])) {
		    // The authorization URI will, upon redirecting, return a parameter called code.
		    $authenticationUrl = $oauth2->buildFullAuthorizationUri(['access_type' => 'offline']);
		    header("Location: " . filter_var($authenticationUrl, FILTER_SANITIZE_URL));
		    exit();
		} else {
	    	$oauth2->setCode($_GET['code']);
        	$authToken = $oauth2->fetchAuthToken();
        	$refreshToken = $authToken['access_token'];
        	$request->session()->put('access_token', $refreshToken);
        	$request->session()->put('code', $_GET['code']);
		}
	}
}
