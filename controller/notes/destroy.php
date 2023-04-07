<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);
$useremail = array_values($_SESSION['user']);
// dd($useremail);
$value = $useremail[0];

$user = $db->query('select * from user where email=:email', [
  'email' => $value
])->find();

$user_id = $user['id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $note = $db->query('select * from data where id = :id', [
    'id' => $_GET['id']
  ])->findOrFail();

  authorize($note['user_id'] === $user_id);

  $db->query('delete from data where id=:id', [
    'id' => $_GET['id']
  ]);

  header('location: /notes');

  exit();
}