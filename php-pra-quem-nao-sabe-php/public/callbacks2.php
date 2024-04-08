<?php

function teste($name)
{
    return "Olá, meu nome é {$name}";
}

function teste2($callback)
{
    if(is_callable($callback)){
        return $callback("Eduardo");
    } else{
        return "Não é um callback";
    }
}

$user = "João";

echo teste2($user);