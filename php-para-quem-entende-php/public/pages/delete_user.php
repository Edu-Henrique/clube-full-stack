<?php

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$delete = delete("users", "id", $id);

if($delete){
    return redirectToHome();
}

flash("message", "Erro ao deletar");
redirectToHome();