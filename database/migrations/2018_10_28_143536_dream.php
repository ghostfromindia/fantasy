<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dream extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dream', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->enum('role',['WK','BAT','AR','BOW','BENCH']);
            $table->integer('player_id');
            $table->float('credit',12,1);
            $table->string('note');
            $table->float('s_by',12,1);
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
