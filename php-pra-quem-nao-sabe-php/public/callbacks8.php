<?php

$user = function ($name){
    return "teste {$name}";
};

function teste($callback)
{
//    return $callback("Eduardo");
//    return call_user_func($callback, "Eduardo");
    return call_user_func_array($callback, ["Eduardo"]);
}

echo teste($user);