<?php
// Inicializar o Model para as rotas de categorias
require("models/categories.php");
$model = new Categories();

if(!empty($action)){
} else {
    //Obter as categorias para conseguir utiliza-las no view através de $categories
    $categories = $model->get();
    require("views/home.php");
}