<?php

function teste($name, $age)
{
    return "Olá, meu nome é {$name}, e minha idade é {$age}";
}

echo call_user_func_array("teste", ["Eduardo", "21"]);