<?php
use core\App;
use core\Validator;
use core\Database;
$db = App::resolve(Database::class);

$useremail = array_values($_SESSION['user']);
// dd($useremail);
$value=$useremail[0];
$user=$db->query('select * from user where email=:email',[
    'email'=>$value
])->find();

$user_id=$user['id'];


$errors = [];
if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO data(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => $user_id
]);

header('location:/notes');