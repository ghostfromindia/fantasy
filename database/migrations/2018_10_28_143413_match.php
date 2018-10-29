<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Match extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home');
            $table->integer('away');
            $table->string('place');
            $table->text('preview');
            $table->date('date');
            $table->time('time');
            $table->time('deadline');
            $table->integer('counter');
            $table->enum('status',['cs','launch']);
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
    }
}
