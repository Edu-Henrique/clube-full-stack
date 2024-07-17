<?php

return [
    "POST" => [
        "/login" => "Login@store",
        "/user/store" => "User@store"
    ],

    "GET" => [
        "/" => "Home@index",
        "/users" => "Users@index",
        "/user/create" => "User@create",
        "/user/[0-9]+" => "User@show",
        "/user/[0-9]+/name/[a-z]+" => "User@create",
        "/login" => "Login@index",
        "/logout" => "Login@destroy"
    ]
];
