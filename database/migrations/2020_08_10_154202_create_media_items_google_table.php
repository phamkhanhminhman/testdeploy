<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaItemsGoogleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_items_google', function (Blueprint $table) {
            $table->string('id');
            $table->string('product_url')->nullable();
            $table->text('base_url')->nullable();
            $table->string('mime_type');
            $table->integer('width');
            $table->integer('height');
            $table->string('file_name');
            $table->datetime('creation_time');
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
        Schema::dropIfExists('media_items_google');
    }
}
