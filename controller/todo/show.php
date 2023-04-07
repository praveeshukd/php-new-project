<?php
use core\App;
use core\Database;
use core\Validator;

$db=App::resolve(Database::class);

$todo = $db->query('select * from tasks')->get();

view('/todo/create.view.php',[
    'heading'=>'Todo',
    'todo'=>$todo
]);
