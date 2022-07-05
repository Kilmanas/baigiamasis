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
        Schema::create('Tripsheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->string('name', 10);
            $table->string('period');
            $table->string('day');
            $table->foreignId('car_make_id')->constrained()->onDelete('cascade');
            $table->foreignId('car_model_id')->constrained()->onDelete('cascade');
            $table->string('plate_no');
            $table->string('destination');
            $table->string('departure_time')->nullable();
            $table->string('return_time')->nullable();
            $table->foreignId('fuel_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('fuel_option_id')->constrained()->onDelete('cascade');
            $table->integer('odometer_out');
            $table->integer('odometer_in');
            $table->integer('distance');
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
        Schema::dropIfExists('TripsheetParams');
    }
}
