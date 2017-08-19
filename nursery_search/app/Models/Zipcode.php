<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Zipcode
 *
 * @property int $id
 * @property string $zipcode 郵便番号(7桁)
 * @property string $zipcode_old 旧郵便番号(5桁)
 * @property string $official_code 全国地方公共団体コード(JISX0401、X0402)CD付き
 * @property string $kana_pref 都道府県名半角カタカナ
 * @property string $kana_city 市区町村名半角カタカナ
 * @property string $kana_town 町域名半角カタカナ
 * @property string $pref 都道府県名漢字
 * @property string $city 市区町村名漢字
 * @property string $town 町域名漢字
 * @property bool $flag_doubleCode 一町域が二以上の郵便番号で表される場合の表示　(注3)　(「1」は該当、「0」は該当せず)
 * @property bool $flag_banchi 小字毎に番地が起番されている町域の表示　(注4)　(「1」は該当、「0」は該当せず)
 * @property bool $flag_chome 丁目を有する町域の場合の表示　(「1」は該当、「0」は該当せず)
 * @property bool $flag_double_area 一つの郵便番号で二以上の町域を表す場合の表示　(注5)　(「1」は該当、「0」は該当せず)
 * @property int $flag_update 更新の表示（注6）（「0」は変更なし、「1」は変更あり、「2」廃止（廃止データのみ使用））
 * @property int $flag_update_reason 変更理由　(「0」は変更なし、「1」市政・区政・町政・分区・政令指定都市施行、「2」住居表示の実施、「3」区画整理、「4」郵便区調整等、「5」訂正、「6」廃止(廃止データのみ使用))
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $pref_en
 * @property string $city_en
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NurserySchool[] $nurserySchools
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereCityEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereFlagBanchi($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereFlagChome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereFlagDoubleArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereFlagDoubleCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereFlagUpdate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereFlagUpdateReason($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereKanaCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereKanaPref($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereKanaTown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereOfficialCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode wherePref($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode wherePrefEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereTown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereZipcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Zipcode whereZipcodeOld($value)
 * @mixin \Eloquent
 */
class Zipcode extends BaseModel
{
  protected $table = 'zipcode';
  protected $fillable = [
    'zipcode',
    'zipcode_old',
    'official_code',
    'kana_pref',
    'kana_city',
    'kana_town',
    'pref',
    'city',
    'town',
    'flag_doubleCode',
    'flag_banchi',
    'flag_chome',
    'flag_double_area',
    'flag_update',
    'flag_update_reason',
  ];

  protected $dates = ['deleted_at'];

  public function nurserySchools()
  {
    return $this->hasMany('App\Models\NurserySchool', 'official_code', 'official_code');
  }

  public function getZipcode($per_page)
  {
    return $this->paginate($per_page);
  }

  public static function getByOffcialCode($official_code)
  {
    return self::where('official_code', $official_code)->first();
  }

  public function getZipcodePref()
  {
    return $this->select(
      'zipcode_id'
      , 'zipcode'
      , 'zipcode_old'
      , 'official_code'
      , 'kana_pref'
      , 'pref')->get();
  }

  public function getZipcodeByTown($town)
  {
    return $this->where('town', $town)
      ->get();
  }

  public static function findCityByPrefCode(string $pref_code) : Collection
  {
    $now = Carbon::now();
    return self::select('official_code', 'city', 'kana_city')
      ->where('official_code', 'like', $pref_code . '%')
      // TODO: 以下、nurserySchoolsにデータが入るまでコメントアウト
      // ->has('nurserySchools', '>', 0)
      // ->whereHas('nurserySchools', function ($q) use ($now) {
      //   $q->where('is_public', true);
      //     ->whereDate('public_date', '<', $now)　恐らく、public_start_dtmが対応するものだと思うけど動物病院側のテーブル構造みて確認
      //     ->whereDate('end_date', '>', $now);　恐らく、public_end_dtmが対応するものだと思うけど動物病院側のテーブル構造みて確認
      // })
      ->groupBy('official_code', 'city', 'kana_city')
      ->withCount('nurserySchools')
      ->orderByRaw('CAST(kana_city AS BINARY) ASC')
      ->get();
  }

  public static function getPrefByPrefCode($pref_code)
  {
//    return self::find(1);
    return self::select('official_code', 'pref')
      ->where('official_code', 'like', $pref_code . '%')
      ->first();
  }

  public function getTownByCity($pref)
  {
    return $this->where('city', $pref)
      ->orWhere('kana_city', $pref)
      ->select(
        'zipcode_id'
        , 'zipcode'
        , 'zipcode_old'
        , 'official_code'
        , 'kana_town'
        , 'town')
      ->get();
  }

  public function zipcodeSearch($code)
  {
    return $this->where('zipcode_id', $code)
      ->orWhere('zipcode', $code)
      ->orWhere('zipcode_old', $code)
      ->get();
  }

}

