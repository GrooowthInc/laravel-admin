<?php

namespace App\LaravelAdmin;
// TODO:PHP7で厳格になった規約を無視。。。
@(function () {
    class AdminEx extends \Encore\Admin\Admin
    {
        /**
         * Admin url.
         *
         * @param $url
         *
         * @return string
         */
        public static function url($url)
        {
            $prefix = (string)config('admin.prefix');

            if (empty($prefix) || $prefix == '/') {
                return '/' . env('APP_CONTEXT') . '/' . trim($url, '/');
            }
            if (strpos($url, "nursery_admin") === true) {
                return "/$prefix/" . trim($url, '/');
            } else {
                return '/' . env('APP_CONTEXT') . "/$prefix/" . trim($url, '/');
            }
        }

        /**
         * @param $model
         * @param Closure $callable
         *
         * @return \App\LaravelAdmin\GridEx
         */
        public function grid($model, Closure $callable)
        {
            return new GridEx($this->getModel($model), $callable);
        }
    }
})();