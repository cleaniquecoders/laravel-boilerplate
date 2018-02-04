[![Build Status](https://travis-ci.org/cleaniquecoders/laravel-boilerplate.svg?branch=master)](https://travis-ci.org/cleaniquecoders/laravel-boilerplate) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/laravel-boilerplate/v/stable)](https://packagist.org/packages/cleaniquecoders/laravel-boilerplate) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/laravel-boilerplate/downloads)](https://packagist.org/packages/cleaniquecoders/laravel-boilerplate) [![License](https://poser.pugx.org/cleaniquecoders/laravel-boilerplate/license)](https://packagist.org/packages/cleaniquecoders/laravel-boilerplate)

# Laravel Boilerplate

A boilerplate based on Laravel Framework to speed up web application development setup.

## Packages

1. [Cleanique Coders](https://github.com/cleaniquecoders)

	- Artisan Makers
	- Blueprint Macro
	- Profile

2. [Laravel Proxy Package](https://github.com/fideloper/TrustedProxy)
3. [Spatie](https://github.com/spatie)

	- Image Optimizer
	- Laravel Activitylog
	- Laravel Analytics
	- Laravel Collection Macros
	- Laravel Google Calendar
	- Laravel Html
	- Laravel Medialibrary
	- Laravel Menu
	- Laravel Permission
	- Laravel Referer
	- Laravel Responsecache
	- Laravel Sluggable

4. [Hashids](https://github.com/ivanakimov/hashids.php)
5. [Sweet Alert](https://github.com/uxweb/sweet-alert)
6. [Sempro PHPUnit Pretty Printer](https://github.com/Sempro/phpunit-pretty-print)

## Installation

```
$ composer create-project cleaniquecoders/laravel-boilerplate
```

Configure your `.env`, then:

```
$ php artisan reload:db
```

### Google API

Create [Google Service Account Credentials](https://console.developers.google.com/apis/dashboard?project=karnival-usahawan-desa) for:

1. [Google Calendar](https://github.com/spatie/laravel-google-calendar#how-to-obtain-the-credentials-to-communicate-with-google-calendar)
2. [Google Analytic](https://github.com/spatie/laravel-analytics#how-to-obtain-the-credentials-to-communicate-with-google-analytics)

## Usage

### Commands

There's some commands area ready built-in. Others, may refer to respective packages.

- `reload:db` - Run `migrate:fresh --seed` with `profile:seed`. You may extend the usage.
- `reload:cache` - Recache everything

## Test

To run the test, type `vendor/bin/phpunit` in your terminal.

To have codes coverage, please ensure to install PHP XDebug then run the following command:

```
$ vendor/bin/phpunit -v --coverage-text --colors=never --stderr
```

## Contributions

Everyone are welcome to contribute to this package. However, it's a good practice to provide:

1. The problem you solved
2. Provide test
3. Documentation

Without these 3, you may add extra work for the maintainer.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
