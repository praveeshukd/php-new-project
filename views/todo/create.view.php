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

    <h2 class="display-4 text-center" >My To Do List</h2>
    <form class="mt-8 space-y-6" action="/todo/task" method="POST">

    <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="task" class="sr-only">task</label>
                        <input id="email" name="task" type="text" autocomplete="task" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Enter a task">
                               <div>
                               <label for="task" class="sr-only">Date</label>
                               <input type="date">
                               </div>
                              
                              
                    </div>
                    <ul>
                    <?php if (isset($errors['task'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['task'] ?></li>
                    <?php endif; ?>
                </ul>
                </div>

                <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        ADD 
                    </button>
           
                    </div>

                
            </form>
    </div>
  </div>     
  <div class="container">
  <div class="row">
    <div class="col-8 m-auto">
    <form class="mt-8 space-y-6" action="/todo/task" method="POST">
      
    <div class="-space-y-px rou$router->get('/todo/delete','controller/todo/delete.php');nded-md shadow-sm">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($todo as $td) :?>

    <tr>
      <td scope="row"><?=$td['id'];?></td>
      <td><?= $td['task']?></td>
      <td><?= $td['Date']?></td>
      <td class=" hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><a href="/todo/delete?id=<?= $td['id'] ?>">Delete</a></td>
      <td class=" hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><a href="/todo/edit?id=<?= $td['id'] ?>">Edit</a></td>

    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<p>
            <a href="/" class="text-blue-500 underline">Go back...</a>
        </p>   
            </form>
    </div>
  </div>     

</body>
</html>