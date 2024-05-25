<?php

require __DIR__ . "/../../../bootstrap.php";

if(isEmpty()){
    flash("message", "Preencha todos os campos");

    return redirect("create_user");
}

$validate = validate([
    "nome" => "s",
    "sobrenome" => "s",
    "email" => "e",
    "password" => "s"
]);
$cadastro = create("users", $validate);

dd($cadastro);
if($cadastro){
    flash("message", "Cadastrado com sucesso", "success");

    return redirect("create_user");
}

flash("message", "Erro ao cadastrar");
redirect("create_user");