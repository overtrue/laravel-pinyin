<?php

/*
 * This file is part of the overtrue/laravel-pinyin.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelPinyin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Overtrue\Pinyin\Pinyin;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app->singleton(Pinyin::class, function ($app) {
            return new Pinyin();
        });

        $this->app->alias(Pinyin::class, 'pinyin');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Pinyin::class, 'pinyin'];
    }
}
