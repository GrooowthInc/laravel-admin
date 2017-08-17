<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RailwayCompany extends Model
{
    protected $table = "railway_company_m";
    protected $fillable = ['id', 'name_full', 'name_kana', 'name_short', 'is_diabled', 'order', 'order_jr'];
}
