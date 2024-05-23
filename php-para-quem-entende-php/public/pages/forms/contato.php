<?php

require __DIR__ . "/../../../bootstrap.php";

//dd($_SERVER["REQUEST_METHOD"]);

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

$data = [
    "quem" => $validate->email,
    "para" => "dudu.henrique165@gmail.com",
    "mensagem" => $validate->message,
    "assunto" => $validate->subject
];

try {
    if (send($data)){
        flash("message", "Email enviado com sucesso", "success");

        redirect("contato");
    } else{
        flash("message", "Erro no envio do email");

        redirect("contato");
    }
} catch (Exception $e){
    echo $e->getMessage();
}