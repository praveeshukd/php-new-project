<?php
use core\App;
use core\Database;

$db = App::resolve(Database::class);
$useremail = array_values($_SESSION['user']);
// dd($useremail);
$value=$useremail[0];

$user=$db->query('select * from user where email=:email',[
    'email'=>$value
])->find();


$note = $db->query('select * from data where id = :id', [
    'id' => $_GET['id']
])->findOrFail();
$user_id=$note['id'];


authorize($note['user_id'] === $user_id);

view("notes/edit.view.php", [
    'heading' => 'Edit',
    'errors' => [],
    'note' => $note
]);