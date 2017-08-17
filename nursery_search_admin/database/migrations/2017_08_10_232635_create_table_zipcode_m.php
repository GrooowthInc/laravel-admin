<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableZipcodeM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcode', function (Blueprint $t) {
            $t->increments('id');
            $t->char('zipcode', 7)->nullable()->index()->comment('郵便番号(7桁)');
            $t->char('zipcode_old', 5)->nullable()->comment('旧郵便番号(5桁)');
            $t->char('official_code', 11)->nullable()->index()->comment('全国地方公共団体コード(JISX0401、X0402)CD付き');
            $t->string('kana_pref')->nullable()->comment('都道府県名半角カタカナ');
            $t->string('kana_city')->nullable()->comment('市区町村名半角カタカナ');
            $t->string('kana_town')->nullable()->comment('町域名半角カタカナ');
            $t->string('pref')->nullable()->comment('都道府県名漢字');
            $t->string('city')->nullable()->comment('市区町村名漢字');
            $t->string('town')->nullable()->comment('町域名漢字');
            $t->boolean('flag_doubleCode')->default(false)->comment('一町域が二以上の郵便番号で表される場合の表示　(注3)　(「1」は該当、「0」は該当せず)');
            $t->boolean('flag_banchi')->default(false)->comment('小字毎に番地が起番されている町域の表示　(注4)　(「1」は該当、「0」は該当せず)');
            $t->boolean('flag_chome')->default(false)->comment('丁目を有する町域の場合の表示　(「1」は該当、「0」は該当せず)');
            $t->boolean('flag_double_area')->default(false)->comment('一つの郵便番号で二以上の町域を表す場合の表示　(注5)　(「1」は該当、「0」は該当せず)');
            $t->integer('flag_update')->nullable()->comment('更新の表示（注6）（「0」は変更なし、「1」は変更あり、「2」廃止（廃止データのみ使用））');
            $t->integer('flag_update_reason')->nullable()->comment('変更理由　(「0」は変更なし、「1」市政・区政・町政・分区・政令指定都市施行、「2」住居表示の実施、「3」区画整理、「4」郵便区調整等、「5」訂正、「6」廃止(廃止データのみ使用))');
            $t->softDeletes();
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
        Schema::dropIfExists('zipcode');
    }
}
