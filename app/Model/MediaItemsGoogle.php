<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MediaItemsGoogle extends Model
{
    protected $table = 'media_items_google';
    
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'id', 'product_url', 'base_url', 'mime_type', 'width', 'height', 'file_name', 'creation_time'
    ];
}
