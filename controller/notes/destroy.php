<?php
use core\App;
use core\Database;
use core\Validator;

$db=App::resolve(Database::class);
// $config = require base_path('config.php');
$currentUserId = 1;
// $db = new Database($config['database']);
// dd($_SERVER);
if($_SERVER["REQUEST_METHOD"]==="POST"){


    $note = $db->query('select * from data where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();
    
    authorize($note['user_id']===$currentUserId);
    // dd($_POST);
  $db->query('delete from data where id=:id',[
 'id'=>$_GET['id']
  ]);
  header('location: /notes');
  exit();
}

