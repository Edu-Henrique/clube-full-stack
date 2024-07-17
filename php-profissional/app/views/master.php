<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->e($title) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!-- HEADER -->

    <?=$this->insert('partials/header')?>
    <?php
        //require VIEWS . "/partials/header.php";
    ?>

<!-- MAIN -->
    <div class="container">
        <?php
            //require VIEWS . $view;
        ?>
        <?=$this->section('content')?>
    </div>

    <?=$this->section("script")?>
</body>
</html>