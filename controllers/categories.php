<?php
// Inicializar o Model para as rotas de categorias
require("models/categories.php");
$model = new Categories();

/*
localhost/app/hotelCategory
localhost/app/hotelCategory/hotelName
*/

if(!empty($permalink)){
    $hotelInfo = $model->getHotelInfo($permalink);
    require("views/hotels.php");
    
} else {
    //Obter as categorias para conseguir utiliza-las no view através de $categories
    // require("views/home.php");
}