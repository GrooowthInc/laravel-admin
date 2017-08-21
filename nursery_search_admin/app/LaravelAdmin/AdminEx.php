<?php
namespace App\LaravelAdmin;

class AdminEx extends \Encore\Admin\Admin {
    /**
     * Admin url.
     *
     * @param $url
     *
     * @return string
     */
    public static function url($url)
    {
        $prefix = (string) config('admin.prefix');

        if (empty($prefix) || $prefix == '/') {
            return '/'.env('APP_CONTEXT').'/'.trim($url, '/');
        }
        if(strpos($url,"nursery_admin") === true ){
            return "/$prefix/".trim($url, '/');
        } else {
            return '/'.env('APP_CONTEXT')."/$prefix/" . trim($url, '/');
        }
    }

}