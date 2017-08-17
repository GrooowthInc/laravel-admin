<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RailwayRouteStation extends Model
{
    protected $table = "railway_route_station_m";
    protected $fillable = ['id', 'stop_station_id', 'station_m_id', 'railway_route_m_id', 'route_cd', 'stop_station_order_1', 'stop_station_order_2', 'is_disabled'];
}
