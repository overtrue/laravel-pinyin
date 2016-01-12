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
        if (function_exists('config_path')) {
            $this->publishes([
                __DIR__ . '/config.php' => config_path('pinyin.php'),
            ], 'config');
        }
    }

    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'pinyin'
        );

        Pinyin::settings(config('pinyin', []));

        $this->app->singleton('pinyin', function($app)
        {
            return Pinyin::getInstance();
        });
    }
}