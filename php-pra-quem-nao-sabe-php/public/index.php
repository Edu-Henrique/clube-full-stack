<?php

$_SESSION["logged"] = false;

$_SESSION["logged"] = true;

if($_SESSION["logged"]){
    echo "é verdadeiro <br>\n";
}

$name = !!"Eduardo";
$age = 20;
$logged = false;

if($name && $age >= 18 && $logged){
    echo "é verdadeiro <br>";
} else{
    echo "é falso <br>";
}

$data = array("Maria", "João", "José", 34, true);

$length = count($data);

$data[$length] = "lest";

array_push($data, "teste");

$data[0] = "first";

array_unshift($data, "1First");

var_dump($data);


$person = ["name" => "Eduardo", "age" => 24, "documents" => ["cpf" => "1651651451", "rg" => "51561325"]];

var_dump($person["documents"]["cpf"]);

// LOOPS

for ($i = 0; $i < 10; $i++){
    echo $i. "<br>";
}

$names = ["Eduardo", "Henrique", "João", "Pedro", "Rafael", "Leão"];
$i = 0;
while($i < count($names)){
    echo $names[$i] . "<br>";
    $i++;
}

$i = 0;
do{
    echo $names[$i] . "<br>";
    $i++;
} while($i < count($names));

foreach ($names as $key => $value){
    echo $key . " => " . $value . "<br>";
}

echo "<hr>";

foreach ($names as $key => $value){
    if($key%2 == 1){
        continue;
    }
    echo $key . " => " . $value . "<br>";
}
echo "<hr>";

foreach ($names as $key => $value){
    if($key == 1){
        break;
    }
    echo $key . " => " . $value . "<br>";
}
