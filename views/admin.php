<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>body {margin: 0 7%;}</style>

</head>
<body>
    <h1>Admin Page</h1>

    <button class="btn btn-primary">Add Category</button>
    <br><br>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Category ID #</th>
            <th>Category Name</th> 
            <th>Edit</th>
        </tr>
        <?php
               // echo '<pre>' . var_export($categories, true) . '</pre>';
               $categoriesLength = count($categories);
               for ($i = 0; $i < $categoriesLength; $i ++) {
                   echo '
                   <tr>
                       <td>'.$categories[$i]["category_id"].'</td>
                       <td>'.$categories[$i]["name"].'</td>
                       <td>
                           <a href="/category/'.$categories[$i]["permalink"].'" class="btn btn-info btn-sm">View</a>
                           <a href="" class="btn btn-success btn-sm">Edit</a>
                           <a href="" class="btn btn-danger btn-sm">Delete</a>
                       </td>
                   </tr>
                       ';
               }
        ?>     
</table>


   
    
    
</body>
</html>