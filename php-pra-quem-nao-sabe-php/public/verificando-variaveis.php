<?php

//$name = "Eduardo";
$name = null;

echo isset($name);

// ISSET TAMBÉM SERVE PARA ARRAYS

$person = ["name" => "eduardo", "age" => 20];

echo isset($person["name"]);