<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OAuthGoogle extends Model
{
    protected $table = 'oauth_google';
    
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'code', 'access_token'
    ];

}
