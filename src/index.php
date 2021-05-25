<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Sandbox\UseCase\PasswordGrant;

$url = $_SERVER['REQUEST_URI'];

$routes = [
    '/password-grant' => new PasswordGrant()
];
$processor = $routes[$url];

if ($processor === null) {
    echo '<h2>defined routes</h2>';
    echo '<ul>';
    echo implode(PHP_EOL, array_map(fn($route) => "<li><a href='$route'>$route</a></li>", array_keys($routes)));
    echo '</ul>';
} else {
    $processor->call();
}
