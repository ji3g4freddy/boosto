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
            $table->string('logo')->nullable()->change();
            $table->string('image')->nullable()->change();
            $table->string('style1');
            $table->string('link1');
            $table->string('style2')->nullable()->change();
            $table->string('link2')->nullable()->change();
            $table->string('style3')->nullable()->change();
            $table->string('link3')->nullable()->change();
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
        Schema::dropIfExists('posts');
    }
}
