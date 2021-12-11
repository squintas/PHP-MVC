<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Isto é a view das categorias</h2>
    

    <?php
   foreach($categories as $category) {
       echo '
           <p>
               <a href="/categories/'.$category["permalink"].'">'.$category["name"].'</a>

           </p>
       ';
       }
    ?>


    <br><br><br><br><br>
    <a href="/">Home Page</a>





   
    </body>
</html>