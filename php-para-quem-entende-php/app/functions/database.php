<?php

function connect()
{
    try {
        $pdo = new PDO("mysql:host:localhost;dbname=blog;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $pdo->exec("USE blog");
        return $pdo;
    } catch (PDOException $e){
        echo $e->getMessage();
        return;
    }

}

function create($table, $fields)
{
    $pdo = connect();

    if (!is_array($fields)){
        $fields = (array) $fields;
    }

    try {
        $sql = "INSERT INTO {$table}";
        $sql .= "(" . implode(', ', array_keys($fields)) . ")";
        $sql .= " VALUES (:". implode(", :", array_keys($fields)) . ")";

        $insert = $pdo->prepare($sql);
        //dd($sql);
        return $insert->execute($fields);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
}

function update()
{

}

function find()
{

}

function delete()
{

}