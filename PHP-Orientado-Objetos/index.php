<?php

require "app/classes/Pessoa.php";
require "app/classes/AtividadesPessoa.php";
require "app/classes/UploadFoto.php";

$upload = new UploadFoto();
$upload->file("foto.png");
//$upload->extension() . "\n";
$upload->rename();
echo $upload->upload();

//$atividadesPessoa = new AtividadesPessoa();
//echo $atividadesPessoa->pular() . "\n";
//echo $atividadesPessoa->andar() . "\n";

//$pessoa = new Pessoa();
//$pessoa->idade = 24;
//$pessoa->nome = "Eduardo";
//$pessoa->email = "eduardo@example.com";
//
//echo $pessoa->dados() . "\n";
//
//$pessoa = new Pessoa();
//$pessoa->idade = 25;
//$pessoa->nome = "João";
//$pessoa->email = "joao@example.com";

//echo $pessoa->dados() . "\n";