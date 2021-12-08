<?php

if(!empty($action)) {
    echo 'mostrar os posts' . $action;
}
else {
    require("views/home.php");
}