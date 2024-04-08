<?php

function teste($name)
{
    return "Olá, meu nome é {$name}";
}

echo call_user_func("teste", "Eduardo");