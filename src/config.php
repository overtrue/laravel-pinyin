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
          'delimiter'    => ' ',

          /**
           * Output with tone symbol.
           *
           * true: dài
           * false: dai
           */
          'accent'       => true,

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
          'only_chinese' => false,

          /**
           * Output uppercase.
           */
          'uppercase'    => false
        ];