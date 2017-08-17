<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRailwayRouteM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railway_route_m', function(Blueprint $t) {
            $t->integer('id')->comment('鉄道路線ID');
            $t->string('route_cd', 255)->comment('鉄道路線コード');
            $t->integer('railway_company_m_id')->comment('鉄道事業者ID');
            $t->string('route_name_1', 255)->comment('鉄道路線名1');
            $t->string('route_name_1_bracket', 255)->comment('鉄道路線名1括弧あり');
            $t->string('route_name_1_kana_bracket', 255)->comment('鉄道路線名1括弧あり読み');
            $t->string('route_name_1_kana', 255)->comment('鉄道路線名1読み');
            $t->string('route_name_2', 255)->comment('鉄道路線名2');
            $t->string('route_name_2_bracket', 255)->comment('鉄道路線名2括弧あり');
            $t->string('route_name_2_kana_bracket', 255)->comment('鉄道路線名2括弧あり読み');
            $t->string('route_name_2_kana', 255)->comment('鉄道路線名2読み');
            $t->boolean('is_disabled')->comment('無効フラグ')->default(false);
            $t->integer('order')->comment('表示順');
            $t->timestamps();
            $t->primary('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('railway_route_m');
    }
}
