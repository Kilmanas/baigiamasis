<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFuelOptionIdToTripsheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Tripsheet', function (Blueprint $table) {
            $table->integer('fuel_option_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Tripsheet', function (Blueprint $table) {
            $table->dropColumn('fuel_option_id');
        });
    }
}
