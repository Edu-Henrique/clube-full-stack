<?php

function validate(array $validations)
{
    $result = [];
    $param = '';
    foreach ($validations as $field => $validate){
         $result[$field] = (!str_contains($validate, "|")) ?
             $validate($field, $param) :
             multipleValidations($validate, $field, $param);
    }

    if (in_array(false, $result)){
        return false;
    }

    return $result;
}

function singleValidate($validate, $field, $param)
{
    if (str_contains($validate, ":")){
        [$validate, $param] = explode(":", $validate);
    }

    return $validate($field, $param);
}

function multipleValidations($validate, $field, $param)
{
    $explodePipeValidate = explode("|", $validate);
    foreach ($explodePipeValidate as $validate){

        if (str_contains($validate, ":")){
            [$validate, $param] = explode(":", $validate);
        }

        $result = $validate($field, $param);
    }

    return $result;
}

function required($field)
{
    if ($_POST[$field] === ''){
        setFlash($field, "* Campo obrigatório");
        return false;
    }

    return  filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
}

function email($field)
{
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

    if (!$emailIsValid){
        setFlash($field, "* Tem que ser um email válido");
        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
}

function unique($field, $param)
{
    $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
    $user = findBy($param, $field, $data);

    if ($user){
        setFlash($field, "* E-mail já está cadastrado");
        return false;
    }

    return $data;
}

function maxlen($field, $param)
{
    $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
    if (strlen($data) > $param){
        setFlash($field, "Senha muito extença, máximo de caracteres são {$param}");
        return false;
    }

    return $data;
}
