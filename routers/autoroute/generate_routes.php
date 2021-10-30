<?php

$routes = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;

function generateRoute(string $method, string $route): void{
    $directory = __DIR__ . '/src';
    exec("php vendor/autoroute-create.php AutoRoute $directory $method $route", $output);
    foreach ($output as $line){
        echo $line;
    }
    echo PHP_EOL;
}

// STATIC-GET
for ($i = 0; $i < $routes; $i++) {
    $route = "/static" . $i;
    $method = "GET";
    generateRoute($method, $route);
}

// DYNAMIC
for ($i = 0; $i < $routes; $i++) {
    $route = "/dynamic" . $i . "/{id}";
    $method = "GET";
    generateRoute($method, $route);
}
