<?php

session_start();

//echo session_id() . "<br>";

$_SESSION["name"] = "Eduardo";
$_SESSION["person"] = ["name" => "Eduardo", "age" => 20];

//unset exclui uma sessão.
//unset($_SESSION["name"]);
//unset($_SESSION["person"]);

//session_destroy exclui todas as sessões
session_destroy();

session_regenerate_id();

echo isset($_SESSION["name"]) ? $_SESSION["name"] . "<br>" : "Sessão Não existe <br>";
echo isset($_SESSION["person"]) ? var_dump($_SESSION["person"]) . "<br>" : "Sessão Não existe <br>";
