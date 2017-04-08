# JWC9 Website

Powered by Laravel 5.4

## Libraries
- Bootstrap 3.3.7
- jQuery 3.1.1

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
- Because we are using `Vue.js` for front-end so we need to install dependencies
```
npm install
```
- Then build it
```
npm run production // For Production
npm run watch // For Development with watching source files
```
- Running up server! 
```
php artisan serve
```

## For Front-End Team
Please visit `resources/assets/js/README/md` for more detail.
