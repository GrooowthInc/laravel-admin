<?php

namespace App\Model;
use DB;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = "station_m";
    protected $fillable = ['id',
        'station_cd',
        'name',
        'name_bracket',
        'name_kana',
        'location',
        'pref_cd',
        'distance_gynecology',
        'distance_pediatrics',
        'distance_kindergarten',
        'distance_nursery_school',
        'distance_outside',
        'distance_pediatric_dentistry',
        'distance_otolaryngology',
        'distance_dermatology',
        'distance_learning',
        'distance_primary_school',
        'distance_ocular',
        'distance_restaurant',
        'is_disabled'];

    public function setLocationAttribute(array $value)
    {
        $this->attributes['location'] = DB::raw("(GeomFromText('POINT(" . $value['lat'] . " " . $value['lng'] . ")'))");
    }

    public function getLocationAttribute(string $value)
    {
        $value = substr($value, strlen('POINT('), strlen($value) - (strlen('POINT(') + 1));
        $value = explode(" ", $value);
        $ret = [];
        $ret['lat'] = $value[0];
        $ret['lng'] = $value[1];

        return $ret;
    }
}
