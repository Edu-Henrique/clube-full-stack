<?php

namespace app\controllers;

class User
{
    public function show($params)
    {
        if (!isset($params["user"])){
            return redirect("/");
        }

        $user = findBy("users", "id", $params["user"]);
        var_dump($user);
        die();
    }

    public function create($params)
    {

        return [
            "view" => "create.php",
            "data" => ["title" => "Sign-up"]
        ];
    }

    public function store()
    {
        $validate = validate([
            "nome" => "required",
            "sobrenome" => "required",
            "email" => "email|unique:users",
            "password" => "required|maxlen:20"
        ]);

        if (!$validate){
            return setMessageErrorRedirect("message", "Dados inválidos", "/user/create");
        }

        var_dump($validate);
        die();
    }
}