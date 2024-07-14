<?php

function update(string $table, array $fields, array $where)
{
    try {
        if (!arrayIsAssociative($fields) || !arrayIsAssociative($where)){
            throw new Exception("O Array tem que ser associativo!");
        }

        $connect = connect();

        $sql = "UPDATE {$table} SET ";
        foreach (array_keys($fields) as $field){
            $sql .= "{$field} = :{$field}, ";
        }
        $sql = trim($sql, ", ");
        $whereFields = array_keys($where);
        $sql .= " WHERE {$whereFields[0]} = :{$whereFields[0]}";

        $data = array_merge($fields, $where);

        $prepare = $connect->prepare($sql);
        $prepare->execute($data);
        return $prepare->rowCount();

    } catch (PDOException $e){
        var_dump($e->getMessage());
    }
}