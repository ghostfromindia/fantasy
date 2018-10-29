<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preper', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->enum('role',['WK','BAT','AR','BOW']);
            $table->integer('runs');
            $table->integer('balls_bat');
            $table->integer('wickets');
            $table->integer('balls_bow');
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
