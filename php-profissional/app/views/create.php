<div class="my-4">
    <h2>Cadastro</h2>
    <form action="/user/store" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="name" aria-describedby="Nome">
            <div id="email" class="form-text"><?php echo getFlash("nome") ?></div>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" id="lastName" aria-describedby="Sobrenome">
            <div id="email" class="form-text"><?php echo getFlash("sobrenome") ?></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Endereço de Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="Email">
            <div id="email" class="form-text"><?php echo getFlash("email") ?></div>
            <div id="email" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password">
            <div id="email" class="form-text"><?php echo getFlash("password") ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</div>