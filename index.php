<?php

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

// echo '<pre>';
// print_r($url_parts);
// echo '</pre>';


$controllers = [
    "categories",
    "home",
    "traveljournal"
];

// Vamos buscar o controller. Posição depois do Traveljournal no URL
$controller = !empty($url_parts[1]) ? $url_parts[1] : "home";
$permalink = !empty($url_parts[2]) ? $url_parts[2] : "";

//Verifica se o controller está no array. Desta forma aceita o URL 
if(!in_array($controller, $controllers)) {
    header("HTTP/1.1 400 Bad Request");
    die("Request não reconhecido");
}

//Vamos fazer require do controller especifico da pasta controllers.
require("controllers/" .$controller. ".php");