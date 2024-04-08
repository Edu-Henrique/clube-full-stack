<?php

class User
{
    public static function teste($name, $age)
    {
        return "Olá, Meu nome é: {$name} e minha idade é {$age}";
    }
}

$user =new User();

echo call_user_func(["User", "teste"], "Eduardo", 20);