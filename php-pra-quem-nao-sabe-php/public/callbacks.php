<?php

function teste($name)
{
    return "Olá, meu nome é {$name}";
}

function teste2($callback)
{
    return $callback("Eduardo");
}

echo teste2("teste");