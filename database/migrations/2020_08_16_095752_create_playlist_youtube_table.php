<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistYoutubeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_youtube', function (Blueprint $table) {
            $table->string('playlist_id')->unique();
            $table->string('title');
            $table->text('thumbnails');
            $table->string('desc')->nullable();
            $table->string('link');
            $table->string('total_video');
            $table->string('year');
            $table->string('account_id');
            $table->string('channel_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_youtube');
    }
}
