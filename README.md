### Installations


add to routes/web.php
```php
$router->post('/user/todo/select', [
	'middleware' => 'https',
	'uses' => 'TodoController@select'
]);
```

add to bootstrap/app.php
```php
$app->middleware([
     App\Http\Middleware\Https::class
]);

$app->routeMiddleware([
    'https' => App\Http\Middleware\Https::class,
]);
```
