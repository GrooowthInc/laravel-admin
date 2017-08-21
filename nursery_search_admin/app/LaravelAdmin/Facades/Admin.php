<?php

namespace App\LaravelAdmin\Facades;

use App\LaravelAdmin\AdminEx;
use Illuminate\Support\Facades\Facade;

class Admin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AdminEx::class;
    }

}
