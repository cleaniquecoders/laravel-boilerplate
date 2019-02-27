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
$ bin/init.sh
```

Update your database connection in `.env` then run:

```
$ bin/db.sh 
```

## Usage

### Bin Scripts

|           Command          |              Description              |
|----------------------------|---------------------------------------|
| bin/init.sh                | Install dependencies and setup `.env` |
| bin/update.sh              | Update dependencies.                  |
| bin/reload-db.sh           | Remigrate and reseed database.        |
| bin/deploy.sh              | Deploy to target server. (WIP)        |

### User Accounts


By default, there's no users created. But you can run to create 3 main users - Developer, Administrator and User: 

```
$ php artisan seed:pre
```

|      Name     |         E-mail        |    Password   |      Role     |
|---------------|-----------------------|---------------|---------------|
| Developer     | developer@app.com     | developer     | Developer     |
| Administrator | administrator@app.com | administrator | Administrator |
| User          | user@app.com          | user          | User          |

You may overwrite the `database/seeds/PreSeedSeeder.php` as necessary.

### Access Control

Access control for the application can be configure from `config/acl.php`. 

It consist of `roles`, `permissions` and `actions`. 

Default seeder for ACL is in `database/seeds/RolesAndPermissionsSeeder.php`. 

You may overwrite this as you please.

Seeded roles and permissions based on `database/seeds/RolesAndPermissionsSeeder.php` will have all guards specify in `config/auth.php`.

### Commands

There's some commands area ready built-in. Others, may refer to respective packages.

|           Command          |                                                 Description                                                 |
|----------------------------|-------------------------------------------------------------------------------------------------------------|
| `php artisan reload:db`    | Remigrate table and seed the data.                                                                          |
| `php artisan reload:cache` | Reload all related caches.                                                                                  |
| `php artisan reload:all`   | This will run `reload:cache` and `reload:db` command.                                                       |
| `php artisan seed:dev`     | This will seed development data for your application in development environment.                            |
| `php artisan seed:staging` | This will seed staging data for your application in staging environment.                                    |
| `php artisan seed:prod`    | This will seed production data for your application in production environment.                              |
| `php artisan seed:pre`     | This will pre-seed data for your application. The data is global scope, which is usable in all environment. |

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
