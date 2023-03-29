<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if(!empty($errors)){
    return view('sessions/create.view.php');
}

$user=$db->query('select * from user where email=:email',[
    'email'=>$email
])->find();

if($user){
    if(password_verify($password,$user['password'])){
        login([
            'email'=>$email
        ]);
        header('location:/');
        exit();
    }
}

return view('sessions/create.view.php',[
    'errors'=>[
        'email'=>'no matching account found for that email address'
    ]
    ]);