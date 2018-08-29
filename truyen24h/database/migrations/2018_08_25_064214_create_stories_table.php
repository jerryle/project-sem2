<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',191)->default('None')->unique();
            $table->string('details',1024)->default('None');
            $table->string('image',255)->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('author', 128)->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('sub_count')->default(0);
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('slug',128);
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
        Schema::dropIfExists('stories');
        Schema::enableForeignKeyConstraints();
    }
}
