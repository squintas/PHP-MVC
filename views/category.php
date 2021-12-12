<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h3>Isto é a página da categoria</h3>

<?php

foreach($hotels as $hotel) {
       echo '
           <p>
               '.$hotel["name"].'

           </p>
       ';
       }
?>

<br><br><br><br><br>
<a href="/categories">Ver Categorias</a>
<br>
<a href="/">Home Page</a>


</body>
</html>