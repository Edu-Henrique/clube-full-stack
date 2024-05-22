<h1>Contato</h1>

<form action="pages/forms/contato.php" method="post" role="form">
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="assunto">Assunto:</label>
        <input type="text" class="form-control" name="subject" id="assunto" placeholder="Digite o assunto">
    </div>

    <div class="form-group">
        <label for="msg">Mensagem:</label>
        <textarea name="message" id="" cols="120" rows="5" name="message" id="msg" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>