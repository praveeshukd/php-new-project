<?php
use core\App;
use core\Database;
use core\Validator;
$db=App::resolve(Database::class);
$notes = $db->query('select * from data where user_id=1')->get();
// dd($notes);
view('/notes/index.view.php',[
    'heading'=>'Notes',
    'notes'=>$notes
]);
// require "views/notes/index.view.php";

