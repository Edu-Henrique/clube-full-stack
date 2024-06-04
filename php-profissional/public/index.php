<?php

require_once __DIR__ . "/bootstrap.php";

try {
    router();
} catch (Exception $e){
    var_dump($e->getMessage());
}