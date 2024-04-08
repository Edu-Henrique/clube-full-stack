<?php

//GLOBAL


//LOCAL

$name = "Eduardo";
$age = 39;

function person()
{

    global $name;
    echo $name . "<br>";
    echo $GLOBALS["name"] . "<br>";
    echo $GLOBALS["age"] . "<br>";

    foreach ($GLOBALS as $global){
        if (!is_array($global)){
            echo "{$global} <br>";
        }
    }

    var_dump($GLOBALS);
}

person();