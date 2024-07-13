<?php

namespace app\controllers;

class Home
{
    public function index($params)
    {
        $welcome = "Bem-vindo, Visitante";
        if (!empty($_SESSION['logged'])){
            $welcome = ($_SESSION["logged"]->id) ? "Bem-vindo, " . $_SESSION["logged"]->nome : "Bem-vindo, Visitante";
        }
        $users = all("users");
        return [
            "view" => "home",
            "data" => [
                "title" => "home",
                "welcome" => $welcome,
                "users" => $users
            ]
        ];
    }
}