<?php

namespace App\Services;

use File;
use Illuminate\Http\Request;
use Google\Auth\OAuth2;
use Google\Auth\Credentials\UserRefreshCredentials;
use App\Traits\CredentialsGoogle;

class AuthGoogleService 
{
    use CredentialsGoogle;

    public static $serviceScopes = [
        'https://www.googleapis.com/auth/photoslibrary',
        'https://www.googleapis.com/auth/photoslibrary.appendonly',
        'https://www.googleapis.com/auth/photoslibrary.readonly',
        'https://www.googleapis.com/auth/photoslibrary.readonly.appcreateddata',
        'https://www.googleapis.com/auth/photoslibrary.sharing',
    ];
    
    public function __construct()
    {
        
    }

    /**
     * Set authorization parameters
     * @param array    $scopes
     * @param string   $redirectUrl
     */
   
    public function setAuthorParam(array $scopes, $redirectURI)
    {
        $clientSecretJson = $this->parseClientSecret();
        $clientId = $clientSecretJson['client_id'];
        $clientSecret = $clientSecretJson['client_secret'];

        $oauth2 = new OAuth2([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'authorizationUri' => 'https://accounts.google.com/o/oauth2/v2/auth',
            // Where to return the user to if they accept your request to access their account.
            // You must authorize this URI in the Google API Console.
            'redirectUri' => $redirectURI,
            'tokenCredentialUri' => 'https://www.googleapis.com/oauth2/v4/token',
            'scope' => $scopes,
        ]);

        return $oauth2;
    }
}

