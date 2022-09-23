# mbLaravel-Scaffold
Starting point for any Laravel 9 projects.

## Description
This project contains the following:
1. Bootstrap 5
1. Laravel Authentication

## Requirements
1. PHP 8.1+
1. Node >= 16.*

## Development setup
1. Clone project
1. cd to project root directory
1. Copy `.env.example` as `.env`
1. Run `composer install`
1. Run `npm install`
1. Run `php artisan key:generate`
1. Run `php artisan migrate`
1. Run `php artisan serve`


## Limitations
1. Forgot password is not yet implemented

## Change Bootstrap Theme
There are several Bootswatch themes provided in this project. To switch:
1. Edit resource\sass\app.scss
1. Comment out `@import 'variables';`
1. Comment out `@import 'bootstrap/scss/bootstrap';`
1. Add `@import '../css/bootswatch/journal.css';`
