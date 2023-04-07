<?php 
use core\App;
use core\Database;
use core\Validator;

$db=App::resolve(Database::class);
  


$db->query("INSERT INTO `product` (`item`, `quentity`, `price`) VALUES (:item, :quentity, :price)",[
    'item' => $_POST['item'],
'quentity' => $_POST['quentity'],
 'price'=>$_POST['price']


]); 
    
header('location:/product/show');