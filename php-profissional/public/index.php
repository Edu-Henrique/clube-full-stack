<?php

require_once __DIR__ . "/bootstrap.php";

try {
    $data = router();

    if (!isset($data["data"])){
        throw new Exception("O índice data faltando");
    }

    if (!isset($data["data"]["title"])){
        throw new Exception("O índice title faltando");
    }

    if (!isset($data["view"])){
        throw new Exception("O índice view está faltando");
    }

    if (!file_exists(VIEWS.$data["view"].".php")){
        throw new Exception("Essa view {$data['view']} não existe");
    }


//    $arr = [
//        'nome' => 'teste 2',
//        'sobrenome' => 'Silva',
//        'email' => 'ana@teste.com',
//        'password' => '65416106'
//    ];

    $templates = new League\Plates\Engine(VIEWS);

    // Render a template
    echo $templates->render($data["view"], $data["data"]);


//    extract($data["data"]);
//
//    $view = $data["view"];
//
//    require VIEWS . "master.php";
} catch (Exception $e){
    var_dump($e->getMessage());
}