<?php

class User
{
    public function __invoke()
    {
        return "teste";
    }
}

$user = new User;

function teste($callback)
{
    return $callback();
}

echo teste($user);