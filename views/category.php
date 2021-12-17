<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    

    <?php
   //Vou buscar a categoria ao array multidimensional
    echo'<h1>'.$hotels[0]["categoryname"].'</h1>';
   
    foreach($hotels as $hotel) {        
       echo '
           <h3>'.$hotel["hotelname"].'</h3>
           <h5>'.$hotel["country"].', '.$hotel["city"].'</h5>
           <a href="/category/'.$hotel["category_id"].'/'.$hotel["hotelpermalink"].'">Ver Hotel</a>
       ';
       }
?>

<br><br><br><br><br>
<a href="/categories">Ver Categorias</a>
<br>
<a href="/">Home Page</a>





</body>
</html>