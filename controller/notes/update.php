<?php

use core\App;
use core\Database;
use core\Validator;


$db = App::resolve(Database::class);

$currentUserId =1;

// find the corresponding note
$note = $db->query('select * from data where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize that the current user can edit the note
authorize($note['user_id'] === $currentUserId);

// validate the form
$errors = [];

if (! Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

// if no validation errors, update the record in the notes database table.
if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update data set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

// redirect the user
header('location: /notes');
die();