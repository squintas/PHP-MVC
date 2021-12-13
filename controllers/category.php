<?php

require("models/hotels.php");
$model = new Hotels();


if(empty($detail)){

    $hotels = $model->getHotelInfo($action);
    // var_dump($action);
    require("./views/category.php");
} else {
   
    $hotel = $model->getHotelByPermalink($detail);
    // var_dump($hotel);
    require("./views/hotel.php");
}