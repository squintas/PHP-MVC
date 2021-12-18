<?php

require("models/hotels.php");
$model = new Hotels();


if(empty($detail)){
    $hotels = $model->getHotelInfo($action);
    echo '<pre>' . var_export($hotels, true) . '</pre>';
    //Valida a Rota
    if(empty($hotels)){
        header("HTTP/1.1 404 Not Found");
        die("Página não existe");
    }


    require("./views/category.php");
} 

else {
    // Vai mandar o URL para a view de cada Hotel. 
    $hotel = $model->getHotelByPermalink($detail);
    // echo '<pre>' . var_export($hotel, true) . '</pre>';
    //Valida a Rota
    if(empty($hotel)){
        header("HTTP/1.1 404 Not Found");
        die("Página não existe");
    }


    require("./views/hotel.php");
}