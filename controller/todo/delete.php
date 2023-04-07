<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $todo = $db->query('select * from tasks where id = :id', [
    'id' => $_GET['id']
  ])->findOrFail();

  $db->query('delete from tasks where id=:id', [
    'id' => $_GET['id']
  ]);

  header('location: /todo/show');
  exit();
}