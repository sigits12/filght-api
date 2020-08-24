<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports', function (Blueprint $table) {
            $table->string('port', 3)->primary();
            $table->string('timezone');
        });

        Schema::create('flights', function (Blueprint $table) {
            $table->string('flightNumber', 10);
            $table->string('departurePort', 3);
            $table->string('arrivalPort', 3);
            $table->dateTimeTz('departureTime', 0);
            $table->dateTimeTz('arrivalTime', 0);
            $table->timestamps();

            $table->primary('flightNumber');

            $table->foreign('departurePort')->references('port')->on('ports');
            $table->foreign('arrivalPort')->references('port')->on('ports');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');

        Schema::dropIfExists('ports');
    }
}
