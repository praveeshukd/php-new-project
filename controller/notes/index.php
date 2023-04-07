<?php
use core\App;
use core\Database;
use core\Validator;
$db = App::resolve(Database::class);
$useremail = array_values($_SESSION['user']);
// dd($useremail);
$value=$useremail[0];

$user=$db->query('select * from user where email=:email',[
    'email'=>$value
])->find();

$user_id=$user['id'];

$db = App::resolve(Database::class);

$notes = $db->query('select * from data where user_id=:user_id',[
    'user_id'=>$user_id
])->get();

view('/notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes
]);
