<?php

function controller($matchedUri, $params)
{
    //list($controller, $method) = explode("@", array_values($matchedUri)[0]);
    [$controller, $method] = explode("@", array_values($matchedUri)[0]);
    $controllerWithNamespace = CONTROLLER_PATH . $controller;

    if(!class_exists($controllerWithNamespace)){
        throw new Exception("Controller {$controller} não existe");
    }

    $controllerInstance = new $controllerWithNamespace;

    if (!method_exists($controllerInstance, $method)){
        throw new Exception("O método {$method} no controller {$controller} não existe");
    }

    return $controllerInstance->$method($params);

}