<?php

return [
          /**
           * Symbol for stitching each pinyin.
           *
           * example:
           *   ' ': dài zhe xī wàng qù lǔ xíng // default.
           *   '':  dàizhexīwàngqùlǔxíng
           *   '-'  dài-zhe-xī-wàng-qù-lǔ-xíng
           */
          'delimiter'    => env('PINYIN_DELIMITER', ' '),

          /**
           * Output with tone symbol.
           *
           * true: dài
           * false: dai
           */
          'accent'       => env('PINYIN_ACCENT', true),

          /**
           * Leaving only the Chinese characters.
           *
           * example:
           *
           * '带着希望%￥@去旅行'
           *
           * true:  dài zhe xī wàng qù lǔ xíng
           * false: dài zhe xī wàng %￥@ qù lǔ xíng
           */
          'only_chinese' => env('PINYIN_ONLY_CHINESE', true),

          /**
           * Output uppercase.
           */
          'uppercase'    => env('PINYIN_UPPERCASE', false)
        ];