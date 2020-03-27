<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataSummary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('data_summary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('station_id');
            //$table->foreign('station_id')->references('station_id')->on('station');
            $table->date('Date');
            $table->float('PM10_Low');
            $table->float('PM10_High');

            $table->float('Tempurature_Low');
            $table->float( 'Tempurature_High');

            $table->float('Humidity_Low');
            $table->float( 'Humidity_High');


            $table->float('Wind_Low');
            $table->float( 'Wind_High');

            $table->float('Rain_Low');
            $table->float( 'Rain_High');
            $table->float('Rainfall');

            $table->float('Pressure_Low');
            $table->float( 'Pressure_High');


            $table->float('Solar_Low');
            $table->float( 'Solar_High');

           
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
