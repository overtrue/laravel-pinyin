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
            __DIR__.'/config/config.php' => config_path('pinyin.php'),
        ], 'config');
    }

    /**
     * Register the provider.
     *
     * @return void
     */
    protected function register()
    {
        config('app.alias.Pinyin', 'Overtrue\Pinyin\Pinyin');

        $this->app->singleton('pinyin', function($app)
        {
            Pinyin::settings(config('pinyin', []));

            return Pinyin::getInstance();
        });
    }
}