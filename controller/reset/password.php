<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$errors = [];
$currentPassword=mt_rand(10,100000);
$hash=password_hash($currentPassword,PASSWORD_BCRYPT);

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}



$user = $db->query('select * from user where email = :email', [
    'email' => $email
])->find();
if(!$user){
    $errors['email']="please enter valid email address";
    view("reset/reset.php",[
        'errors'=>$errors
    ]);
}
if($user){
    $update=$db->query("UPDATE user SET password=('$hash')where  email='$email'");
 
    return view('reset/new.php', [
        'heading' => 'Edit Todo',
    
        'currentPassword' => $currentPassword,
        'user' => $user
    ]);

   
}

