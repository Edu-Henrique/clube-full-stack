<h1>Contato</h1>


<?= get("message") ?>


<form action="pages/forms/create_user.php" method="post" role="form">
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="nome" id="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Digite o assunto">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Digite o assunto">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>