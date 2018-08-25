<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('storyId');
            $table->unsignedInteger('genreId');
            $table->foreign('storyId')->references('id')->on('stories');
            $table->foreign('genreId')->references('id')->on('genres');
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
        Schema::dropIfExists('story_genres');
    }
}
