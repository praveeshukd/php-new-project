<?php

use core\App;
use core\Validator;
use core\Database;

$db=App::resolve(Database::class);

echo "dgdsg";
if (! Validator::string($_POST['task'], 1, 1000)) {
    $errors['task'] = 'A body of no more than 100 characters is required.';
}
if (!empty($errors)) { 
    return view("todo/create.view.php", [
        'heading' => 'Create Todo',
        'errors' => $errors
    ]);
}
    $db->query('INSERT INTO  tasks (task) VALUES(:task)', [
        'task' => $_POST['task'],

       
    ]);
    header('location:/todo/show');
  