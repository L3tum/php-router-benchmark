<?php

$routes = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;

// STATIC-GET
for ($i = 0; $i < $routes; $i++) {
    $route = "/static" . $i;
    $method = "GET";
    $className = "StaticRoute" . $i;
    ob_start();
    include "static_template.php";
    file_put_contents(sprintf("%s/src/Generated/%s.php", __DIR__, $className), ob_get_clean());
}

// DYNAMIC
for ($i = 0; $i < $routes; $i++) {
    $route = "/dynamic" . $i . "/{id}";
    $method = "GET";
    $className = "DynamicRoute" . $i;
    ob_start();
    include "dynamic_template.php";
    file_put_contents(sprintf("%s/src/Generated/%s.php", __DIR__, $className), ob_get_clean());
}
