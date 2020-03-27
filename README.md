### Installations

add to bootstrap/app.php
```php
$app->middleware([
     App\Http\Middleware\Https::class
]);

$app->routeMiddleware([
    'https' => App\Http\Middleware\Https::class,
]);
```
