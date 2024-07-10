# Laravel Role Permission Management System - Laravel `10.x`

A project which manage Role, Permissions and every actions of your Laravel application. A complete solution for Role based Access Control in Laravel.

**Demo:** http://localhost:8000

## Requirements:
- Laravel `7.x` | `9.7` | `11.x`
- Spatie role permission package  `^6.4`

## Versions:
- Laravel `7.x` & PHP -`7.x`
    - Tag - https://github.com/ManiruzzamanAkash/laravel-role/releases/tag/Laravel7.x
    - Branch - https://github.com/ManiruzzamanAkash/laravel-role/tree/Laravel7.x

- Laravel `9.7` & PHP - `8.x`
    - Tag - https://github.com/ManiruzzamanAkash/laravel-role/releases/tag/Laravel9.x

- Laravel `11.x`
    - Tag - https://github.com/ManiruzzamanAkash/laravel-role/releases/tag/Laravel11.x

## Project Setup
Git clone -
```console
git clone https://github.com/ManiruzzamanAkash/laravel-role.git
```

Go to project folder -
```console
cd laravel-role
```

Install Laravel Dependencies -
```console
composer install
```

Create database called - `laravel_role`

Create `.env` file by copying `.env.example` file

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

Run Project -
```php
php artisan serve
```

Since, there is any problem to seeder, Please import the .sql file directly - https://github.com/ManiruzzamanAkash/laravel-role/blob/master/database/sql/laravel_role.sql

So, You've got the project of Laravel Role & Permission Management on your http://localhost:8000

## How it works
1. Login using Super Admin Credential 
2. Create Admin
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an admin
6. Check by login with the new credentials.
7. If you've not enough permission to do any task, you'll get a warning message.
