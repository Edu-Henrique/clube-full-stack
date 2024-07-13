<?php

namespace app\controllers;

class Login
{
    public function index()
    {
        return [
            "view" => "login",
            "data" => ["title" => "login"]
        ];
    }

    public function store($params)
    {

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

        if(empty($email) || empty($password)){
            return setMessageErrorRedirect("message", "Usuário ou senha estão incorretos!", "/login");
        }

        $user = findBy("users", "email", $email);

        if(!$user){
            return setMessageErrorRedirect("message", "Usuário ou senha estão incorretos!", "/login");
        }

        if(!password_verify($password, $user->password)){
            return setMessageErrorRedirect("message", "Usuário ou senha estão incorretos!", "/login");
        }

        $_SESSION[LOGGED] = $user;

        return redirect("/");
    }


    public  function destroy()
    {
        unset($_SESSION[LOGGED]);
        return redirect("/");
    }
}