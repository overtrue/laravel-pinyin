<?php

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