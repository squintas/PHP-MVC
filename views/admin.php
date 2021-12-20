<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- ---------  -->
    <style>
        body {
            margin: 0 7%;
        } 
        .addCategoryForm {
            display: flex;
            gap: 5px;
            }
    </style>

</head>
<body>

    <h1>Admin Page</h1>

    <h3>Category Section</h3>

    <div class="form-group row">
      <div class="col-xs-6 " >
          <form method="post" class="addCategoryForm">
              <input class="form-control" name ="inputCategory" type="text" placeholder="Category Name..">
              <input class="form-control" name ="inputPermalink" type="text" placeholder="Permalink/URL..">
              <button class="btn btn-primary" type="submit">Add category</button>
          </form>
      </div>     
    </div>

    <!-- Tabela das Categorias  -->
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