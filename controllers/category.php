<?php

require("models/hotels.php");
$model = new Hotels();


if(!empty($controller)){

    $hotels = $model->getHotelInfo($permalink);
    // var_dump($hotels);
    require("./views/category.php");
}