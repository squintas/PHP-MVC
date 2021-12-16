<?php
// Inicializar o Model para as rotas de categorias
require("models/categories.php");
$model = new Categories();

/*
localhost/categories
localhost/category/asdasdasd
*/


if(!empty($controller)){ 
    $categories = $model->getHotelCategory();

    


    require("./views/categories.php");
}

