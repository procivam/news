<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('news', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 255);
            $table->string('alias', 255);
            $table->text('text');
            $table->string('h1', 255);
            $table->string('title', 255);
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('image');
            $table->timestamp('date');
            $table->boolean('status')->default(0);
            $table->integer('sort')->default(0);
            $table->integer('label_id')->nullable();
            $table->tinyInteger('section')->nullable()->default(null)->index();
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
        //
        Schema::drop('news');
    }
}
