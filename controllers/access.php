<?php
require("models/users.php");
$modelUsers = new Users();
// session_start();

if($action === "login") {

    if(isset($_POST["send"])) {

        //Sanitização
        foreach($_POST as $key => $value) {
            $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
        }

        $user = $modelUsers -> getUserLogin($_POST);

        if(
            !empty($user) &&
            password_verify($_POST["password"], $user["password"])
        ) {
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["user_name"] = $user["name"];
            header("Location: /home");
        }
        else {
            $message = "Dados incorrectos";                
        }
    }
    
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

    session_destroy();

    header("Location: /");


}

else {
    header("HTTP/1.1 400 Bad Request");
}