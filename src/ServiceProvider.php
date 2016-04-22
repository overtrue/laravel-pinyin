<?php

namespace Overtrue\LaravelPinyin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Overtrue\Pinyin\Pinyin;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pinyin', function($app)
        {
            return new Pinyin();
        });
    }
}