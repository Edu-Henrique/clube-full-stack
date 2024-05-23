<?php

require __DIR__ . "/../../../bootstrap.php";

dd($_SERVER["REQUEST_METHOD"]);

if(isEmpty()){
    flash("message", "Preencha Todos os campos");

    return redirect("contato");
}

$validate = validate([
    "name" => "s",
    "email" => "e",
    "subject" => "s",
    "message" => "s"
]);

//dd($validate);