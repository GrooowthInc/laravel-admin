<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursery_schools', function(Blueprint $t){
            $t->foreign('zipcd')->references('zipcode')->on('zipcode');
            $t->foreign('nearest_station_cd_1')->references('id')->on('station_m');
            $t->foreign('nearest_station_cd_2')->references('id')->on('station_m');
            $t->foreign('nearest_station_cd_3')->references('id')->on('station_m');

        });
        Schema::create('railway_route_m', function(Blueprint $t) {
            $t->foreign('railway_company_m_id')->references('id')->on('railway_company_m');
        });

        Schema::create('railway_route_station_m', function(Blueprint $t){
            $t->foreign('station_m_id')->references('id')->on('station_m');
            $t->foreign('railway_route_m_id')->references('id')->on('railway_route_m');
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
