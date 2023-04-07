<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);
$useremail = array_values($_SESSION['user']);

$value = $useremail[0];

$errors = [];


$user = $db->query('SELECT * FROM `user` WHERE email=:email', [
    'email' => $value
])->find();



$currentPassword = $user['password'];


$verify = password_verify($_POST['current'], $currentPassword);

if($verify){
    $update = $db->query('update user set password = :password where id =:id', [
        'id' => $user['id'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
    
    ]);
    logout();
    header('location:/login');

}
else{
    
    return view('/password/show.php',[
        'errord'=>$errors
    ]);
}
