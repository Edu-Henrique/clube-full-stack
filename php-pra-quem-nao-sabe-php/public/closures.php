<?php

$person = function ($name){
    return $name;
};

var_dump($person("Eduardo"));


function getName($name)
{
    $person = function () use ($name) {
        return $name;
    };

    return $person;
}

var_dump(getName("Eduardo")());