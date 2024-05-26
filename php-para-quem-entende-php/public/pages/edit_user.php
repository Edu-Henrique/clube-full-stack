<?php
    $user = find("users", "id", $_GET["id"]);
?>

<h1>Cadastro</h1>


<?= get("message") ?>


<form action="pages/forms/update_user.php" method="post" role="form">

    <input type="hidden" name="id" value="<?=  $user->id;?>">

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="nome" id="name" placeholder="Digite seu nome" value="<?= $user->nome; ?>">
    </div>

    <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Digite seu email" value="<?= $user->sobrenome; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Digite o assunto" value="<?= $user->email; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>