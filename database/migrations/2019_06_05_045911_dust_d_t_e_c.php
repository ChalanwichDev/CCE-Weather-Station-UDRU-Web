<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DustDTEC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DustDTEC', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('station_id')->unsigned();
            //$table->foreign('station_id')->references('station_id')->on('station');
            $table->date('Date');
            $table->time('Time');
            $table->float('PM10');
 
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('Project');
        Schema::dropIfExists('Project');
    }
}
