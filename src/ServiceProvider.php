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
        $this->publishes([
            __DIR__ . '/config.php' => config_path('pinyin.php'),
        ], 'config');
    }

    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        Pinyin::settings(config('pinyin', []));

        $this->app->singleton('pinyin', function($app)
        {
            return Pinyin::getInstance();
        });
    }
}