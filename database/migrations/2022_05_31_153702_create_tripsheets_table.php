<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripsheets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name', 10);
            $table->string('period');
            $table->string('day');
            $table->integer('car_make_id');
            $table->integer('car_model_id');
            $table->string('destination');
            $table->time('departure_time')->nullable();
            $table->time('return_time')->nullable();
            $table->integer('fuel_type_id');
            $table->integer('odometer_out');
            $table->integer('odometer_in');
            $table->float('fuel_norm');
            $table->float('fuel_out');
            $table->float('fuel_in');
            $table->float('fuel_used');
            $table->float('fuel_received')->default(0);
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
        Schema::dropIfExists('tripsheets');
    }
}
