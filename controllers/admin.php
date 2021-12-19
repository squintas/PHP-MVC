<?php
session_start();
require("models/categories.php");
$model = new Categories();

// Se o utilizador fizer login, passa a ter acesso ao backoffice.
if(!empty($controller) && isset($_SESSION["user_id"])){


    $categories = $model->getHotelCategory();



    require("views/admin.php");
} 
else {
    header("HTTP/1.1 401 Unauthorized");
    die("Não tem permissão");
}

