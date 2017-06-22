<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('studio');
            $table->text('content');
            $table->text('equip');
            $table->string('level');
            $table->integer('price');
            $table->string('place');
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('style1');
            $table->string('link1');
            $table->string('style2')->nullable();
            $table->string('link2')->nullable();
            $table->string('style3')->nullable();
            $table->string('link3')->nullable();
            $table->timestamps();
            $table->integer('verify')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
