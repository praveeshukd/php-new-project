<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$errors = [];

if (!Validator::string($_POST['task'], 1, 100)) {
    $errors['task'] = 'A body of no more than 1,000 characters is required.';
}
if (count($errors)) {
    return view('todo/edit.view.php', [
        'heading' => 'Edit Todo',
        'errors' => $errors,
        'todo' => $todo
    ]);
}

$db->query("UPDATE tasks SET task = :task WHERE tasks .id = :id", [
    'id' => $_POST['id'],
    'task' => $_POST['task']

]);

header('location: /todo/show');
die();