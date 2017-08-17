<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRailwayRouteStationM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railway_route_station_m', function (Blueprint $t) {
            $t->increments('id')->comment('路線駅ID');
            $t->integer('stop_station_id')->comment('停車駅ID');
            $t->integer('station_m_id')->comment('駅ID');
            $t->integer('railway_route_m_id')->comment('鉄道路線ID');
            $t->string('route_cd', 255)->comment('鉄道路線コード');
            $t->integer('stop_station_order_1')->comment('停車順1');
            $t->integer('stop_station_order_2')->comment('停車順2');
            $t->boolean('is_disabled')->comment('無効フラグ')->default(false);            
            $t->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('railway_route_station_m');
    }
}
