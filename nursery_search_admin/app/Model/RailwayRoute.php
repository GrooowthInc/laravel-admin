<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RailwayRoute extends Model
{
    protected $table = "railway_route_m";
    protected $fillable = ['id',
        'route_cd',
        'railway_company_m_id',
        'route_name_1',
        'route_name_1_bracket',
        'route_name_1_kana_bracket',
        'route_name_1_kana',
        'route_name_2',
        'route_name_2_bracket',
        'route_name_2_kana_bracket',
        'route_name_2_kana',
        'is_disabled',
        'order'];
}
