<?php
require("models/users.php");
$modelUsers = new Users();

if($action === "login") {
    
    require("views/login.php");
}

elseif($action === "register") {
    
    // Vamos verificar os dados inseridos pelo utilizador ao criar o registo.
    if(isset($_POST["send"])) {

        $user_id = $modelUsers->create($_POST);
   
        if(!empty($user_id)) {
            
            $_SESSION["user_id"] = $user_id;
            $_SESSION["user_name"] = $_POST["name"];
            
            header("Location: /home");
        }
        
    }

    require("views/register.php");
       
}
elseif($action === "logout") {

}
else {
    header("HTTP/1.1 400 Bad Request");
}