<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStationM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_m', function(Blueprint $t) {
            $t->integer('id')->comment('駅ID');
            $t->string('station_cd', 5)->unique()->comment('駅コード');
            $t->string('name',255)->comment('駅名');
            $t->string('name_bracket', 255)->comment('駅名括弧あり');
            $t->string('name_kana', 255)->comment('駅名読み');
            $t->string('pref_cd', 255)->comment('都道府県コード');
            $t->integer('distance_gynecology')->comment('施設対象距離(産婦人科)');
            $t->integer('distance_pediatrics')->comment('施設対象距離(小児科)');
            $t->integer('distance_kindergarten')->comment('施設対象距離(幼稚園)');
            $t->integer('distance_nursery_school')->comment('施設対象距離(保育園)');
            $t->integer('distance_outside')->comment('施設対象距離(お出かけ)');
            $t->integer('distance_pediatric_dentistry')->comment('施設対象距離(小児歯科)');
            $t->integer('distance_otolaryngology')->comment('施設対象距離(耳鼻咽喉科)');
            $t->integer('distance_dermatology')->comment('施設対象距離(皮膚科)');
            $t->integer('distance_learning')->comment('施設対象距離(習い事)');
            $t->integer('distance_primary_school')->comment('施設対象距離(小学校)');
            $t->integer('distance_ocular')->comment('施設対象距離(眼科)');
            $t->integer('distance_restaurant')->comment('施設対象距離(飲食店)');
            $t->boolean('is_disabled')->comment('無効フラグ')->default(false);
            $t->timestamps();
            $t->primary('id');
        });
        DB::statement('alter table station_m add location geometry');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station_m');
    }
}
