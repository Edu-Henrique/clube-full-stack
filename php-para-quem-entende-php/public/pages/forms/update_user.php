<?php

require __DIR__ . "/../../../bootstrap.php";

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
    flash("message", "Preencha todos os campos");

    return redirect("edit_user&id={$id}");
}

$validate = validate([
    "nome" => "s",
    "sobrenome" => "s",
    "email" => "e"
]);

$atualizado = update("users", $validate, ["id", $id]);

if($atualizado){
    flash("message", "Cadastro atualizado com sucesso", "success");

    return redirect("edit_user&id={$id}");
}

flash("message", "Erro ao Atualizar");
redirect("edit_user&id={$id}");