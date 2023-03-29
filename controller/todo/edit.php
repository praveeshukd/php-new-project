<?php
use core\App;
use core\Database;

$db=App::resolve(Database::class);
// dd($_SERVER);
// dd($_SERVER);
$currentUserId = 1;
    $todo = $db->query('select * from tasks where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();
    
    
    view("todo/edit.view.php", [
        'heading' => 'Note',
        'todo' => $todo
    ]);

