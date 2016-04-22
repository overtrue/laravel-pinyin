<?php

use Illuminate\Support\Facades\Log;
use Overtrue\Pinyin\Pinyin;

if (! function_exists('pinyin')) {
    /**
     * Get the Pinyin of given string.
     *
     * @param  string $string
     * @param  string $option
     *
     * @return string
     */
    function pinyin($string, $option = PINYIN_NONE)
    {
        return app('pinyin')->convert($string, $option);
    }
} else {
    Log::warning('There exist multiple function "pinyin".');
}

if (! function_exists('pinyin_abbr')) {
    /**
     * Get the fist letters of given string.
     *
     * @param  string $string
     * @param  string $delimiter
     *
     * @return string
     */
    function pinyin_abbr($string, $delimiter = '')
    {
        return app('pinyin')->abbr($string, $delimiter);
    }
} else {
    Log::warning('There exist multiple function "letter".');
}

if (! function_exists('pinyin_permlink')) {
    /**
     * Get the fist pinyin and letters of given string.
     *
     * @param  string $string
     * @param  string $delimiter
     *
     * @return string
     */
    function pinyin_permlink($string, $delimiter = '-')
    {
        return app('pinyin')->permlink($string, $delimiter);
    }
} else {
    Log::warning('There exist multiple function "pinyin_and_letter".');
}

if (! function_exists('pinyin_sentence')) {
    /**
     * Get the fist pinyin and letters of given string.
     *
     * @param  string $string
     * @param  string $tone
     *
     * @return string
     */
    function pinyin_sentence($string, $tone = false)
    {
        return app('pinyin')->sentence($string, $tone);
    }
} else {
    Log::warning('There exist multiple function "pinyin_and_letter".');
}