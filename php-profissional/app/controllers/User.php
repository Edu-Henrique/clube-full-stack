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
            "view" => "create",
            "data" => ["title" => "Sign-up"]
        ];
    }

    public function store()
    {
        $validate = validate([
            "nome" => "required",
            "sobrenome" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|maxlen:20"
        ]);

        if (!$validate){
            return setMessageErrorRedirect("message", "Dados inválidos", "/user/create");
        }

        $validate["password"] = password_hash($validate["password"], PASSWORD_DEFAULT);

        $created = create("users", $validate);

        if (!$created){
            return setMessageErrorRedirect("message", "Ocorreu um erro ao cadastrar tente novamente em alguns segundos", "/user/create");
        }

        return redirect("/");
    }
}