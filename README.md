<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

##

```bash
PHP 7.4.3
Laravel v8.65
Bootstrap v4.6.0
jQuery v3.5.1
Font Awesome v4.7.0
```

```bash
# Iniciar projeto
composer create-project laravel/laravel example-app
```

```bash
# AUTENTICAÇÃO - Laravel UI (https://laravel.com/docs/7.x/authentication)
composer require laravel/ui

php artisan ui vue --auth
npm install && npm run dev
# Copiar os arquivos css e js de resources para public, e colocar o bootstrap 4.6.0 dentro deles
# Criar jquery em public/js e importar em resources/views/layouts/app.blade.php
```

```bash
# Criar migrações, model, factory e controller
php artisan make:model Post -mc --resource
php artisan make:model Category -mcf --resource
```

```bash
# Laravel Forms - https://laravelcollective.com/docs/6.x/html
composer require laravelcollective/html
```

```bash
# Perfil de usuário
php artisan make:controller Auth/UserController
php artisan make:controller Auth/UpdatePasswordController
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
