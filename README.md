# Laravel-pinyin

Chinese to Pinyin translator for Laravel5 / Lumen based on [overtrue/pinyin](https://github.com/overtrue/pinyin).

[![Latest Stable Version](https://poser.pugx.org/overtrue/laravel-pinyin/v/stable.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![Total Downloads](https://poser.pugx.org/overtrue/laravel-pinyin/downloads.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![Latest Unstable Version](https://poser.pugx.org/overtrue/laravel-pinyin/v/unstable.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![License](https://poser.pugx.org/overtrue/laravel-pinyin/license.svg)](https://packagist.org/packages/overtrue/laravel-pinyin)

## Install

```shell
composer require "overtrue/laravel-pinyin:~3.0"
```

## For Laravel

Add the following line to the section `providers` of `config/app.php`:

```php
'providers' => [
    //...
    Overtrue\LaravelPinyin\ServiceProvider::class,
],
```

as optional, you can use facade:

```php

'aliases' => [
    //...
    'Pinyin' => Overtrue\LaravelPinyin\Facades\Pinyin::class,
],
```

## For Lumen

Add the following line to `bootstrap/app.php` after `// $app->withEloquent();`

```php
...
// $app->withEloquent();

$app->register(Overtrue\LaravelPinyin\ServiceProvider::class);
...
```

## Usage

you can get the instance of `Overtrue\Pinyin\Pinyin` from app container:

```php

$pinyin = app('pinyin');
echo $pinyin->sentence('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng, bǐ dào dá zhōng diǎn gèng měi hǎo
```

There are more convenient functions:

|  function      | method                                                |
| -------------  | --------------------------------------------------- |
| `pinyin()`     | `app('pinyin')->convert()`                              |
| `pinyin_abbr()`     | `app('pinyin')->abbr()`                                        |
| `pinyin_permalink` | `app('pinyin')->permalink()`                         |
| `pinyin_sentence` | `app('pinyin')->sentence()`                         |

```php
var_dump(pinyin('带着希望去旅行，比到达终点更美好'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing", "bi", "dao", "da", "zhong", "dian", "geng", "mei", "hao"]

var_dump(pinyin_abbr('带着希望去旅行'));
// dzxwqlx
...
```

Using facade:

```php
use Pinyin; // Facade class, NOT Overtrue\Pinyin\Pinyin

var_dump(Pinyin::convert('带着希望去旅行'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing"]

echo Pinyin::sentence('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng, bǐ dào dá zhōng diǎn gèng měi hǎo

```

About `overtrue/pinyin` specific configuration and use, refer to: [overtrue/pinyin](https://github.com/overtrue/pinyin)

## License

MIT
