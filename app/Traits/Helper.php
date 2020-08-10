<?php	

namespace App\Traits;

use Carbon\Carbon;
use File;

trait Helper 
{
    public function formatDateTime($datetime)
    {
        return Carbon::parse($datetime)->format('Y-m-d H:i:s');
    }
}

