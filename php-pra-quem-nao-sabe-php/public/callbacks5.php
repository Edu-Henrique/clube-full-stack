<?php

function teste($name)
{
    return "Olá, Meu nome é {$name}";
}

function teste2($callcack)
{
    return call_user_func($callcack, "Eduardo");
}

echo teste2("teste");
