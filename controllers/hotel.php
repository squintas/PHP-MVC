<?php

if(!empty($action)) {
    require("views/home.php");
}
else {
    require("views/hotel.php");
}