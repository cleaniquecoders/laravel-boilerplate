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

### User Accounts

By default, there's no users created. But you can run `php artisan db:seed DevelopmentSeeder` to run create 3 main users - Developer, Administrator and User.

Login details for default users:

1. E-mail : **developer@app.com** Password: `developer`
2. E-mail : **administrator@app.com** Password: `administrator`
3. 1. E-mail : **user@app.com** Password: `user`

By default, all newly registered user will be assign role as `user`.

### Access Control

Access control for the application can be configure from `config/acl.php`. It consist of `roles`, `permissions` and `actions`. Default seeder for ACL is in `database/seeds/RolesAndPermissionsSeeder.php`. You may overwrite this as you please.

Seeded roles and permissions based on `database/seeds/RolesAndPermissionsSeeder.php` will have all guards specify in `config/auth.php`.

### Commands

There's some commands area ready built-in. Others, may refer to respective packages.

- `reload:db` - Run `migrate:fresh --seed` with `profile:seed`. You may extend the usage.
- `reload:cache` - Recache everything
- `reload:all` - Run above two commands. Passing `-d` will seed `DevelopementSeeder` - useful for development setup.

### API

This boilerplate make use of Laravel Passport. Managing passport only allowed in for role developer. You can overwrite this behaviour in `routes/web.php`.

### Helpers

**generate_sequence($count)** 

Generate sequence with leading zero like `000001`, `000002` and so on.

Length for the leading zero can be configure in `.env` file - `DOCUMENT_SEQUENCE_LENGTH`.

**abbrv($word, $unique_characters)**

A helper to create abbreviation by removing non-alphanumeric, vowels.

Passing second argument as false will return non-unique characters - means that you will see repeatative characters. 

Following are the sample usage and output:

```
>>> abbrv("Cleanique Coders")
=> "CLNQDRS"
>>> abbrv("Cleanique Coders", false)
=> "CLNQCDRS"
```

**generate_reference($prefix, $count)**

Generate document reference string. Usually a document have their own reference on the particular date event.

For instance a payslip document have a reference number / string like `CCR/PYSL/2018/01/000001`.

The format generate is `abbrv/Year/Month/Date/reference_id`.

You can use in two ways:

```
>>> generate_reference("Cleanique Coders Payroll")
=> "CLNQ/CDRS/PYRL/2018/02/04/TBIPOU"
>>> generate_reference("Cleanique Coders Payroll", 10)
=> "CLNQ/CDRS/PYRL/2018/02/04/000010"
```

The length of the `TBIPOU` or `000010` is depends on `DOCUMENT_SEQUENCE_LENGTH` in `.env` file.

**hashids($salt, $length, $alphabet)**

It's essential to have important resources to use other than just incremental id. One of the option is to use [Hashids](https://github.com/ivanakimov/hashids.php).

Following are an example how to use the helper.

```
>>> hashids()->encode(1)
=> "yR5ajG4DBwlz"
>>> hashids('random-salt')->encode(1)
=> "WZvoOMBr19YN"
>>> hashids('random-salt', 24)->encode(1)
=> "GPz1W4mLavAeqAwB2XZbOgQn"
>>> hashids('random-salt', 6)->encode(1)
=> "5qy0lP"
>>> hashids('random-salt', 6, 'qwertyuiopasdfghjkl')->encode(1)
=> "orgpqe"
>>> hashids('random-salt', 6, ',./;<>?:"{}|[]\-=`~!@#$%^&*()')->encode(1)
=> "{&(^&-"
>>> hashids('random-salt', 12, ',./;<>?:"{}|[]\-=`~!@#$%^&*()')->encode(1)
=> "~-!\`-&(*[{)"
```

For `$salt`, by default it will use `APP_KEY`, but you may override it by passing the salt name at the first argument.

For `$length`, you can pass any length of hashids you want to create. By default it's 12 characters.

For `$alphabet`, you can put any characters as per example above. But remember, the alphabets need to be minimum of **16 characters**.

**str_slug_fqcn($object)**

Return slug name for given object.

```
>>> $user = \App\Models\User::first();
=> App\Models\User {#1013
     id: 1,
     hashslug: "krOErpkv6EVR",
     slug: "elza-bins",
     name: "Elza Bins",
     email: "kautzer.polly@example.com",
     deleted_at: null,
     created_at: "2018-02-04 03:11:07",
     updated_at: "2018-02-04 03:11:07",
   }
>>> str_slug_fqcn($user)
=> "app-models-user"
```

**audit($model, $message, $causedBy)**

Simply record audit trail on given `$model`, with proper `$message`. You can optionally passed the third argument - `$causedBy`.

```
>>> auth()->loginUsingId(1)
>>> $user = \App\Models\User::first();
>>> audit($user, 'access via terminal')
>>> auth()->user()->activity->toArray()
=> [
     [
       "id" => 4,
       "log_name" => "default",
       "description" => "User successfully logged in.",
       "subject_id" => 1,
       "subject_type" => "App\Models\User",
       "causer_id" => 1,
       "causer_type" => "App\Models\User",
       "properties" => Illuminate\Support\Collection {#971
         all: [],
       },
       "created_at" => "2018-02-04 03:18:50",
       "updated_at" => "2018-02-04 03:18:50",
     ],
     [
       "id" => 5,
       "log_name" => "default",
       "description" => "access via terminal",
       "subject_id" => 1,
       "subject_type" => "App\Models\User",
       "causer_id" => 1,
       "causer_type" => "App\Models\User",
       "properties" => Illuminate\Support\Collection {#980
         all: [],
       },
       "created_at" => "2018-02-04 03:19:16",
       "updated_at" => "2018-02-04 03:19:16",
     ],
   ]
```

**user()**

The `user()` helper simply return the current logged in user object. The helper will take care your guard.

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
