<?php

/*
 * This file is part of the overtrue/laravel-pinyin.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelPinyin\Facades;

use Illuminate\Support\Facades\Facade;
use Overtrue\Pinyin\Pinyin as Accessor;

class Pinyin extends Facade
{
    public static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}
