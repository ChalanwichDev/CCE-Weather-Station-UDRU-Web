<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Amblient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('Ambient', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('station_id');
            //$table->foreign('station_id')->references('station_id')->on('station');
            $table->date('Date');
            $table->time('Time');
            $table->float('Tempurature');
            $table->float('Humidity');
            $table->float('Wind');
            $table->string('Wind_Direction');
            $table->float('Rain');
            $table->float('Rainfall');
            $table->float('Pressure');
            $table->float('Solar');
            $table->string('UV');
        });
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */ 
    public function down()
    {
        Schema::dropIfExists('Project');
    }
}
