<?php

namespace App\Models;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class NurserySchool extends BaseModel {
  // use \KodiComponents\Support\Upload;
  use SoftDeletes;

  protected $table = 'nursery_schools';
  protected $dates = ['deleted_at'];

  // TODO: AnimalHospitalからコピーしただけ
  protected $fillable = [
    'facility_type_code',
    'facility_code',
    'pref_code',
    'city_code',
    'facility_name',
    'facility_name_kana',
    'tel',
    'zipcode',
    'pref',
    'city',
    'town',
    'transportation_code',
    'nearest_station_code',
    'medical_animals',
    'dog_flg',
    'cat_flg',
    'rabbit_flg',
    'hamster_flg',
    'guinea_pig_flg',
    'ferret_flg',
    'squirrel_flg',
    'bird_flg',
    'reptiles_flg',
    'amphibian_flg',
    'etc_flg',
    'medical_time_am',
    'medical_time_pm',
    'medical_time_etc',
    'closed_day',
    'is_public',
    'public_date',
    'end_date',
    'pr_public_date',
    'pr_end_date',
    'is_pr_public',
    'admin_memo',

  	'dean_name',
  	'hospital_introduction',
  	'dean_notice',
  	'pr_point',
  	'flg_t_c_general',
  	'flg_t_c_secondary',
  	'flg_t_c_contraception',
  	'flg_t_c_rabies',
  	'flg_t_c_vaccine',
  	'flg_t_c_filaria',
  	'flg_t_c_flea',
  	'flg_t_c_surgery',
  	'flg_t_c_prevent',
  	'flg_t_f_mouth',
  	'flg_t_f_eye',
  	'flg_t_f_skin',
  	'flg_t_f_brain',
  	'flg_t_f_circulator',
  	'flg_t_f_respirator',
  	'flg_t_f_digestion',
  	'flg_t_f_liver',
  	'flg_t_f_kidney',
  	'flg_t_f_endocrine',
  	'flg_t_f_blood',
  	'flg_t_f_muscle',
  	'flg_t_f_shaping',
  	'flg_t_f_ear',
  	'flg_t_f_genitals',
  	'flg_t_f_infection',
  	'flg_t_f_parasite',
  	'flg_t_f_cancer',
  	'flg_t_f_poisoning',
  	'flg_t_f_heart',
  	'flg_t_f_wound',
  	'flg_t_s_trimming',
  	'flg_t_s_hotel',
  	'flg_t_s_talk',
  	'flg_a_anicom',
  	'flg_a_aipet',
  	'flg_a_petfamily',
  	'flg_c_visa',
  	'flg_c_master',
  	'flg_c_jcb',
  	'flg_c_amex',
  	'flg_c_diners',
  	'flg_c_other',
  	'flg_o_theday',
  	'flg_o_booking',
  	'flg_o_emergency',
  	'flg_o_overtime',
  	'flg_o_visit',
  	'flg_o_welcome',
  	'flg_o_parking',
  	'flg_o_barrierfree',
  	'flg_o_goods',

    'pr_data_1_title',
    'pr_data_1_picture_1',
    'pr_data_1_picture_2',
    'pr_data_1_picture_3',
    'pr_data_1_picture_4',
    'pr_data_1_picture_5',
    'pr_data_1_info',

    'pr_data_2_title',
    'pr_data_2_picture_1',
    'pr_data_2_picture_2',
    'pr_data_2_picture_3',
    'pr_data_2_picture_4',
    'pr_data_2_picture_5',
    'pr_data_2_info',

    'pr_data_3_title',
    'pr_data_3_tpicture_1',
    'pr_data_3_tpicture_2',
    'pr_data_3_tpicture_3',
    'pr_data_3_tpicture_4',
    'pr_data_3_tpicture_5',
    'pr_data_3_tinfo',

    'pr_data_4_title',
    'pr_data_4_picture_1',
    'pr_data_4_picture_2',
    'pr_data_4_picture_3',
    'pr_data_4_picture_4',
    'pr_data_4_picture_5',
    'pr_data_4_info',

    'pr_data_5_title',
    'pr_data_5_picture_1',
    'pr_data_5_picture_2',
    'pr_data_5_picture_3',
    'pr_data_5_picture_4',
    'pr_data_5_picture_5',
    'pr_data_5_info',

  ];

  // TODO: AnimalHospitalからコピーしただけ
  protected $casts = [
    'is_pr_public'        => 'boolean',
    'pr_data_1_picture_1' => 'image',
    'pr_data_1_picture_2' => 'image',
    'pr_data_1_picture_3' => 'image',
    'pr_data_1_picture_4' => 'image',
    'pr_data_1_picture_5' => 'image',

    'pr_data_2_picture_1' => 'image',
    'pr_data_2_picture_2' => 'image',
    'pr_data_2_picture_3' => 'image',
    'pr_data_2_picture_4' => 'image',
    'pr_data_2_picture_5' => 'image',

    'pr_data_3_picture_1' => 'image',
    'pr_data_3_picture_2' => 'image',
    'pr_data_3_picture_3' => 'image',
    'pr_data_3_picture_4' => 'image',
    'pr_data_3_picture_5' => 'image',

    'pr_data_4_picture_1' => 'image',
    'pr_data_4_picture_2' => 'image',
    'pr_data_4_picture_3' => 'image',
    'pr_data_4_picture_4' => 'image',
    'pr_data_4_picture_5' => 'image',

    'pr_data_5_picture_1' => 'image',
    'pr_data_5_picture_2' => 'image',
    'pr_data_5_picture_3' => 'image',
    'pr_data_5_picture_4' => 'image',
    'pr_data_5_picture_5' => 'image',
  ];
  protected $geofields = ['location'];

  public function zipcode() {
    return $this->belongsTo('App\Models\Zipcode', 'official_code', 'official_code');
  }

}
