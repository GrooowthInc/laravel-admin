<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOfficialCodeToNurserySchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nursery_schools', function(Blueprint $t) {
            $t->char('official_code', 11)->index()->comment('全国地方公共団体コード(JISX0401、X0402)CD付き');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nursery_schools', function(Blueprint $t) {
            $t->dropColumn('official_code');
        });
    }
}
