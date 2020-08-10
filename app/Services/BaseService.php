<?php

namespace App\Services;

use App\Traits\CredentialsGoogle;
use App\Traits\Response;

class BaseService
{
    use CredentialsGoogle, Response;
}