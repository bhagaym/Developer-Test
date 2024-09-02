<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Install Laravel!

1.  Composer is an application-level package manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries. To install Composer globally, download the installer from [https://getcomposer.org/download/](https://getcomposer.org/download/) Verify that Composer in successfully installed, and version of installed Composer will appear:

    `composer --version`

2.  Navigate your prompt to `starterkit` folder.

    `cd starterkit`

3.  Install composer dependencies.

    `composer install`

4.  Copy `.env.example` file and create duplicate. Use `cp` command for linux or Mac.

    `cp .env.example .env`

    If you are using `Windows`, use `copy` instead of `cp`.

    `copy .env.example .env`

5.  Create a table in Mysql database and fill the database details `DB_DATABASE` in `.env` file.
6.  The below command will create tables into database using Laravel `migration` and `seeder`.

    `php artisan migrate:fresh --seed`

7.  Generate your application encryption key.

    `php artisan key:generate`

8.  Create symbolic Link.

    `php artisan storage:link`

## Run Laravel

To run Laravel application navigate your prompt to `starterkit` folder and run the following command. This command will listen for changes and hot reload them.

1.  Navigate your prompt to `starterkit` folder.

    `cd starterkit`

2.  `php artisan serve`

    Keep yout prompt running by default application is served http://127.0.0.1:8000
