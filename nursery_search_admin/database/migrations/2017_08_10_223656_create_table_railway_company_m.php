<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRailwayCompanyM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railway_company_m', function(Blueprint $t){
            $t->integer('id')->comment('鉄道事業者ID');
            $t->string('name_full',255)->comment('鉄道会社正式名称');
            $t->string('name_kana',255)->comment('鉄道事業者よみがな');
            $t->string('name_short',255)->comment('鉄道事業者名称');
            $t->boolean('is_disabled')->comment('無効フラグ')->default(false);
            $t->integer('order')->comment('表示順');
            $t->integer('order_jr')->comment('JR表示順');
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
        Schema::dropIfExists('railway_company_m');
    }
}
