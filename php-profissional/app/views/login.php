<div class="container ">
    <div class="form-signin w-100 m-auto" style="max-width: 400px;">
        <form action="/login" method="post" class="my-5">
            <h1 class="h3 mb-3 fw-normal">Por favor, faça o login</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
                <label for="floatingInput">Endereço de Email</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
                <?php echo getFlash("message"); ?>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Lembrar-me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Logar</button>
        </form>
    </div>
</div>