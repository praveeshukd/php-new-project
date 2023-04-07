<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo list</title>
    <style>
    body{
    padding:0;
    margin:0;

    background-size:cover;
 
    background-repeat:no-repeat;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-8 m-auto">
    <form class="mt-8 space-y-6" action="/todo/task" method="POST">
      
    <div class="-space-y-px rou$router->get('/todo/delete','controller/todo/delete.php');nded-md shadow-sm">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">item</th>
      <th scope="col">quentity</th>
      <th scope="col">price</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($product as $pd) :?>

    <tr>
      <td scope="row"><?=$pd['id'];?></td>
      <td><?= $pd['item']?></td>
      <td><?= $pd['quentity']?></td>
      <td><?= $pd['price']?></td>
      <td><?= $pd['total']?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<p>
            <a href="/product" class="text-blue-500 underline">Go back...</a>
        </p>   
            </form>
    </div>
  </div>     

</body>
</html>