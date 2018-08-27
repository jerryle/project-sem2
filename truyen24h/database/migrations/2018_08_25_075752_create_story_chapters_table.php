<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191)->default('None');
            $table->unsignedInteger('number')->default(0);
            $table->text('content');
            $table->unsignedInteger('story_id');
            $table->foreign('story_id')->references('id')->on('stories');
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
        Schema::dropIfExists('story_chapters');
    }
}
