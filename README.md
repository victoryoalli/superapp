# Super APP - Laravel Multitenancy Example

## Introduction

> A Multitenancy example project using Laravel 8 and [Spatie Laravel Multitenancy package](
https://spatie.be/docs/laravel-multitenancy/v2/installation/base-installation)


## Code Samples

`app\Http\Kernel.php`

```php
'tenant.web' => [
\Spatie\Multitenancy\Http\Middleware\NeedsTenant::class,     \Spatie\Multitenancy\Http\Middleware\EnsureValidTenantSession::class,
],
'tenant.api' => [
\Spatie\Multitenancy\Http\Middleware\NeedsTenant::class,
],
```
`config/multitenancy.php`
```php
'enabled' => env('MULTITENANCY_ENABLED', false),
//...
```
`app/Providers/RouteServiceProvider.php`
```php
$api = ['api'];
$web = ['web'];

if (config('multitenancy.enabled')) {
  array_push($api, 'tenant.api');
	array_push($web, 'tenant.web');
}

Route::prefix('api')
	->middleware($api)
  ->namespace($this->namespace)
  ->group(base_path('routes/api.php'));

Route::middleware($web)
	->namespace($this->namespace)
  ->group(base_path('routes/web.php'));
```

## Installation

> Clone reposository

```php
git clone git@github.com:victoryoalli/superapp.git
```

> Install PHP packages using composer

```php
composer install
```

> Install Javascript/Node packages using npm

```php
npm install && npm run dev
```

> Create a Database `superapp`


> Copy `.env.example` to `.env`


## Follow the instructions  (ESPAÑOL)

> [Laravel Meetup - Multitenancy](https://laraveles.doyo.digital/course/15-de-abril-2021-zpgk-zjni/laravel-multitenancy-lfip-xmyn)

> or

> [Youtub Channel ELiberio - Laravel Multi-Tenancy](https://www.youtube.com/watch?v=CdJUDAx7yOA)
