<?php

function delete(string $table, array $where)
{
    try {

        $connect = connect();
        if (!arrayIsAssociative($where)){
            return throw new Exception("O Array tem que ser associativo");
        }

        $whereFields = array_keys($where);
        $sql = "DELETE FROM {$table} WHERE {$whereFields[0]} = :{$whereFields[0]}";

        $prepare = $connect->prepare($sql);
        $prepare->execute($where);

        return $prepare->rowCount();

    } catch (PDOException $e){
        var_dump($e->getMessage());
    }
}