<?php

namespace Truyen24h\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class T24RegisterProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('without_spaces', function($attribute, $value, $parameters, $validator) {
            return preg_match('/^\S*$/u', $value);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
