<?php
// Inicializar o Model para as rotas de categorias
require("models/categories.php");
$model = new Categories();

/*
localhost/hotelCategory
localhost/hotelCategory/hotelName
*/


if(!empty($permalink)){
    require("views/subcategories.php");
} else {

     $categories = $model->getHotelCategory($permalink);
        require("./views/categories.php");
}

