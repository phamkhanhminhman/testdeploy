<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PlayListYoutube extends Model
{
    protected $table = 'playlist_youtube';
    
    protected  $primaryKey = 'playlist_id';

    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'playlist_id', 'title', 'thumbnails', 'desc', 'link', 'total_video', 'year', 'account_id', 'channel_id', 'creation_time'
    ];
}
