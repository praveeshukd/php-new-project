<?php
use core\App;
use core\Database;
use core\Validator;

$db=App::resolve(Database::class);

// $config = require base_path('config.php');
$currentUserId = 1;
// $db = new Database($config['database']);
// dd($_SERVER);
if($_SERVER["REQUEST_METHOD"]=="GET"){


    $todo = $db->query('select * from tasks where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();
  
  $db->query('delete from tasks where id=:id',[
 'id'=>$_GET['id']
  ]);

  header('location: /todo/show');
  exit();
}

