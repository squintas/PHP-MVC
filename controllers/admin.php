<?php

require("models/categories.php");
$model = new Categories();

// Se o utilizador fizer login, passa a ter acesso ao backoffice.
if(!empty($controller) && isset($_SESSION["user_id"])){

    // Post para Categorias
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $inputCategory = $_POST['inputCategory'];
        $inputPermalink = $_POST['inputPermalink'];
        if (empty($inputCategory) || empty($inputPermalink)) {
            echo "Is empty";
        } else {
            $model->createCategory($inputPermalink, $inputCategory);
        }
    }




    $categories = $model->getHotelCategory();
    require("views/admin.php");
} 
else {
    header("HTTP/1.1 401 Unauthorized");
    die("Não tem permissão");
}

