<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);
$useremail = array_values($_SESSION['user']);
// dd($useremail);
$value=$useremail[0];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

$user = $db->query('SELECT * FROM `user` WHERE email=:email',[
    'email'=>$value
])->find();

$userId = $user['id'];
$alreadyexsistUser = $db->query('select * from user where email = :email', [
    'email' => $_POST['email']
])->find();

if ($alreadyexsistUser) {
   
    return header('location:/');
}

$update = $db->query('update user set email = :email where id =:id', [
    'id' => $userId,
    'email' => $_POST['email']
]);
login([
    'email' => $_POST['email']
]);

header('location: /');
die();