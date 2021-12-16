<?php

require("models/hotels.php");
$model = new Hotels();


if(empty($detail)){
    $hotels = $model->getHotelInfo($action);
    
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

    //Valida a Rota
    if(empty($hotel)){
        header("HTTP/1.1 404 Not Found");
        die("Página não existe");
    }


    require("./views/hotel.php");
}