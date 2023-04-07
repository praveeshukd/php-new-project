<?php
use core\App;
use core\Database;
use core\Validator;


$db=App::resolve(Database::class);

$product=$db->query("select * ,quentity*price as total from product")->get();



view('product/product.view.php',[
    'product'=>$product
]);




