<?php

use Illuminate\Support\Facades\Log;
use Overtrue\Pinyin\Pinyin;

if (! function_exists('pinyin')) {
    /**
     * Get the Pinyin of given string.
     *
     * @param  string $string
     * @param  array  $setting
     *
     * @return string
     */
    function pinyin($string, $setting = [])
    {
        return Pinyin::trans($string, $setting);
    }
} else {
    Log::warning('There exist multiple function "pinyin".');
}

if (! function_exists('letter')) {
    /**
     * Get the fist letters of given string.
     *
     * @param  string $string
     * @param  array  $setting
     *
     * @return string
     */
    function letter($string, $setting = [])
    {
        return Pinyin::letter($string, $setting);
    }
} else {
    Log::warning('There exist multiple function "letter".');
}

if (! function_exists('pinyin_and_letter')) {
    /**
     * Get the fist pinyin and letters of given string.
     *
     * @param  string $string
     * @param  array  $setting
     *
     * @return string
     */
    function pinyin_and_letter($string, $setting = [])
    {
        return Pinyin::parse($string, $setting);
    }
} else {
    Log::warning('There exist multiple function "pinyin_and_letter".');
}