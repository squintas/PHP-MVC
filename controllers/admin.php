<?php
session_start();

// Se o utilizador fizer login, passa a ter acesso ao backoffice.
if(!empty($controller) && isset($_SESSION["user_id"])){
    require("views/admin.php");
} 
else {
    header("HTTP/1.1 401 Unauthorized");
    die("Não tem permissão");
}

