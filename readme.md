# JWC9 Website

Powered by Laravel 5.4

## Dev First time setup guide

- Install dependencies via composer
```
composer install
```
- If some error happen like `bootstrap/cache` not found just simply create that folder then composer install again
```
mkdir bootstrap/cache
```
- Copy `.env.example` to `.env`
- Generate key
```
php artisan key:generate
```
- Running up server! 
```
php artisan serve
```
