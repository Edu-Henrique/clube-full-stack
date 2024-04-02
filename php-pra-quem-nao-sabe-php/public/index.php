<?php

$_SESSION["logged"] = false;

$_SESSION["logged"] = true;

if($_SESSION["logged"]){
    echo "é verdadeiro <br>\n";
}

$name = !!"Eduardo";
$age = 20;
$logged = false;

if($name && $age >= 18 && $logged){
    echo "é verdadeiro";
} else{
    echo "é falso";
}