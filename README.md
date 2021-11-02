<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Versões

```bash
PHP 7.4.3
Laravel v8.65
Bootstrap v4.6.0
jQuery v3.5.1
Font Awesome v4.7.0
```

## Iniciar projeto

```bash
cp .env.example .env

composer install

php artisan key:generate

php artisan migrate --seed
```

## Iniciar Projeto Laravel do zero

```bash
# Iniciar projeto
composer create-project laravel/laravel example-app
```

```bash
# AUTENTICAÇÃO - Laravel UI (https://laravel.com/docs/7.x/authentication)
composer require laravel/ui

php artisan ui bootstrap --auth
npm install && npm run dev
# Copiar a pasta css e js de resources para public, e colocar o bootstrap 4.6.0 dentro deles
# Criar jquery.js em public/js e importar em resources/views/layouts/app.blade.php
```

```bash
# Criar migrações, model, factory e controller
php artisan make:model Post -mc --resource
php artisan make:model Category -mf --resource
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
