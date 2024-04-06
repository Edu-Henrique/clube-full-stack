<?php

function connection(){
    $pdo = new PDO("mysql:dbname=estoque;host=localhost;user=root;pass");
    return $pdo;
}

function getData($table)
{
    $connection = connection();
    $query = $connection->query("SELECT * FROM {$table}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData("produto"));