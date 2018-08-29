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
        Schema::create('story_genre', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('story_id');
            $table->unsignedInteger('genre_id');
            $table->foreign('story_id')->references('id')->on('stories');
            $table->foreign('genre_id')->references('id')->on('genres');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('story_genre');
        Schema::enableForeignKeyConstraints();
    }
}
