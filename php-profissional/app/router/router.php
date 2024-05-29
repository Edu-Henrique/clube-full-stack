<?php

function routes()
{
    return require "routes.php";
}

function exactMatchUriInArrayRoutes($uri, $routes)
{
    if(array_key_exists($uri, $routes)){
        return ["achou"];
    }

    return [];
}

function router()
{
    $uri = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);

    $routes = routes();

    $matchedUri = exactMatchUriInArrayRoutes($uri, $routes);

    var_dump($matchedUri);
}