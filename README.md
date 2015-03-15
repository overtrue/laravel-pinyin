# Laravel-pinyin

Chinese to Pinyin translator for Laravel 5 based on [overtrue/pinyin](https://github.com/overtrue/pinyin).

# Install

```shell
composer require "overtrue/laravel-pinyin:dev-master"
```

or add the following line to your project's `composer.json`:

```json
"require": {
    "overtrue/laravel-pinyin": "dev-master"
}
```
then

```shell
composer update
```
After completion of the above, add the following line to the section `providers` of `config/app.php`:

```php
'Overtrue\LaravelPinyin\ServiceProvider',
```

# Configuration

you can publish the config file to `config/pinyin.php`:

```php
php artisan vendor:publish --provider="Overtrue\LaravelPinyin\ServiceProvider" --tag="config"
```

# Usage

you can get the instance of `Overtrue\Pinyin\Pinyin` from app container:

```php
<?php
$pinyin = App::make('pinyin');
echo $pinyin->pinyin('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng bǐ dào dá zhōng diǎn gèng měi hǎo
```

or use facade `Pinyin`:

add the following line to section `aliases` of you project's `config/app.php` file:

```php
'Pinyin'    => 'Overtrue\Pinyin\Pinyin',
```

then

```php
echo Pinyin::pinyin('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng bǐ dào dá zhōng diǎn gèng měi hǎo
echo Pinyin::letter('带着希望去旅行，比到达终点更美好');
// d z x w q l x b d d z d g m h
```

There are more convenient:

```php
echo pinyin('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng bǐ dào dá zhōng diǎn gèng měi hǎo
echo letter('带着希望去旅行，比到达终点更美好');
// d z x w q l x b d d z d g m h
```

About `overtrue/pinyin` specific configuration and use, refer to: [overtrue/pinyin](https://github.com/overtrue/pinyin)

# License

MIT
