<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviando Arquivos por fomulário</title>
</head>
<body>
    <form action="enviando-arquivo-formulario.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>