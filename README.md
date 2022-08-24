# Laravel Package Example

And example of a Laravel package.

- Load controllers
- Load routes
- Load views
- Register migrations
- Register commands
- Push middleware
- Bind Facade
- Publish configurations, resources, assets
- Use another package

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
