<?php

namespace App\Services;

use File;
use Illuminate\Http\Request;
use Google\Auth\OAuth2;
use Google\Auth\Credentials\UserRefreshCredentials;
use App\Traits\CredentialsGoogle;
use GuzzleHttp\Client;

class PhotoGoogleService extends BaseService
{
    const URL_PHOTO = 'https://photoslibrary.googleapis.com';

    public function __construct()
    {
        
    }

    public function listMediaItems($access_token)
    {
        try {
            $client = new \GuzzleHttp\Client([
                'verify' => false,
                'base_uri' => self::URL_PHOTO,
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                ],
            ]);
            
            $url = '/v1/mediaItems';
            $request = $client->get($url);
            $response = json_decode($request->getBody()->getContents());

            return $response->mediaItems;

        } catch (\Exception $e) {
            echo $e;
        }
    }
}

