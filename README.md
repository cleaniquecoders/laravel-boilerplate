[![Build Status](https://travis-ci.org/cleaniquecoders/laravel-boilerplate.svg?branch=master)](https://travis-ci.org/cleaniquecoders/laravel-boilerplate) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/laravel-boilerplate/v/stable)](https://packagist.org/packages/cleaniquecoders/laravel-boilerplate) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/laravel-boilerplate/downloads)](https://packagist.org/packages/cleaniquecoders/laravel-boilerplate) [![License](https://poser.pugx.org/cleaniquecoders/laravel-boilerplate/license)](https://packagist.org/packages/cleaniquecoders/laravel-boilerplate)

# Laravel Boilerplate

A boilerplate based on Laravel Framework to speed up web application development setup.

## Packages

- [Cleanique Coders - Artisan Makers](https://github.com/cleaniquecoders/artisan-makers)
- [Cleanique Coders - Blueprint Macro](https://github.com/cleaniquecoders/blueprint-macro)
- [Cleanique Coders - Laravel Helper](https://github.com/cleaniquecoders/laravel-helper)
- [Cleanique Coders - Laravel Observers](https://github.com/cleaniquecoders/laravel-helpers)
- [Cleanique Coders - Money Wrapper](https://github.com/cleaniquecoders/money-wrapper)
- [Cleanique Coders - Profile](https://github.com/cleaniquecoders/profile)
- [Spatie - Image Optimizer](https://github.com/spatie/image-optimizer)
- [Spatie - Laravel Activitylog](https://github.com/spatie/)
- [Spatie - Laravel Html](https://github.com/spatie/laravel-html)
- [Spatie - Laravel Medialibrary](https://github.com/spatie/laravel-medialibrary)
- [Spatie - Laravel Permission](https://github.com/spatie/laravel-permission)
- [Spatie - Laravel Responsecache](https://github.com/spatie/laravel-responsecache)
- [Spatie - Laravel Sluggable](https://github.com/spatie/laravel-sluggable)
- [Softon - Sweet Alert](https://github.com/softon/sweetalert)
- [Tighten.Co - Ziggy](https://github.com/tightenco/ziggy)

## Installation

```
$ composer create-project cleaniquecoders/laravel-boilerplate
```

Configure your `.env`, then:

```
$ php artisan reload:all -d
```

## Usage

### User Accounts

By default, there's no users created. But you can run `php artisan db:seed DevelopmentSeeder` to run create 3 main users - Developer, Administrator and User.

Login details for default users:

1. E-mail : **developer@app.com** Password: `developer`
2. E-mail : **administrator@app.com** Password: `administrator`
3. E-mail : **user@app.com** Password: `user`

By default, all newly registered user will be assign role as `user`.

### Access Control

Access control for the application can be configure from `config/acl.php`. It consist of `roles`, `permissions` and `actions`. Default seeder for ACL is in `database/seeds/RolesAndPermissionsSeeder.php`. You may overwrite this as you please.

Seeded roles and permissions based on `database/seeds/RolesAndPermissionsSeeder.php` will have all guards specify in `config/auth.php`.

### Commands

There's some commands area ready built-in. Others, may refer to respective packages.

- `reload:db` - Run `migrate:fresh --seed` with `profile:seed`. You may extend the usage.
- `reload:cache` - Recache everything
- `reload:all` - Run above two commands. Passing `-d` will seed `DevelopementSeeder` - useful for development setup.

### Routes

Routes has been organised so that you can manage it properly, keep it clean and well organised.

1. API Routes - `routes/api`
2. Breadcrumbs Routes - `routes/breadcrumbs`
3. Datatable Routes - `routes/datatable`
4. Web Routes - `routes/web`

You may add unlimited files in respective directories above, based on it's concern.

## Contributions

Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/spatie/laravel-permission).

## Pull Requests

- **[PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)** - The easiest way to apply the conventions is to install [PHP Code Sniffer](http://pear.php.net/package/PHP_CodeSniffer).

- **Add tests!** - Your patch won't be accepted if it doesn't have tests.

- **Document any change in behaviour** - Make sure the `README.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0](http://semver.org/). Randomly breaking public APIs is not an option.

- **Create feature branches** - Don't ask us to pull from your master branch.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please [squash them](http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) before submitting.

## Running Test

```
$ vendor/bin/phpunit
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
