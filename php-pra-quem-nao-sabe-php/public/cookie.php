<?php


//setcookie("name", "Eduardo", time() + 2*24*60*60);

setcookie("curso", "PHP", strtotime("-5days"));
setcookie("name", "Eduardo", strtotime("-5days"));

echo $_COOKIE["name"] . "<br>";


if(isset($_COOKIE["curso"])){
    echo $_COOKIE["curso"] . "<br>";
} else{
    echo "Cookie não exite <br>";
}

$cookie = isset($_COOKIE["teste"]) ? $_COOKIE["teste"] : null;

if (isset($cookie)) {
    echo $cookie ."<br>";
} else {
    echo "Cookie não exite";
}
