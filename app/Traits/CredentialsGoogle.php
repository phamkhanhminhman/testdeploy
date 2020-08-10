<?php	

namespace App\Traits;

use File;

trait CredentialsGoogle 
{
    public function parseClientSecret()
    {
        $clientSecret = File::get(storage_path('../credentials.json'));
        $clientSecretJson = json_decode($clientSecret, true)['web'];
        
        return $clientSecretJson;
    }
}

