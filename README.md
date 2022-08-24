# Laravel Gglink Package

And example of a Laravel package.

- Load controllers
- Load routes
- Load views
- Login
- Logout
- Push middleware
- Profile ( add, edit, update, delete )
- Permissions
- Report
- Exception handler

### Installation

Install via composer:

```
composer require til-saifulislam/gglink
```

And add the service provider in config/app.php:

```php
Alien\Gglink\GglinkServiceProvider::class,
```

Add API guards in config/auth.php:

```
'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
```
