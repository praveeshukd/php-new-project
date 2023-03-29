<?php
$router->get('/','controller/index.php');
$router->get('/contact','controller/contact.php');
$router->get('/about','controller/about.php');


$router->get('/notes','controller/notes/index.php')->only('auth');
$router->get('/notes/create','controller/notes/create.php');
$router->post('/notes','controller/notes/store.php');

$router->delete('/note','controller/notes/destroy.php');
$router->get('/note','controller/notes/show.php');
$router->get('/note/edit','controller/notes/edit.php');
$router->patch('/note','controller/notes/update.php');

$router->get('/register', 'controller/registration/create.php')->only('guest');
$router->post('/register', 'controller/registration/store.php')->only('guest');

$router->get('/login', 'controller/sessions/create.php')->only('guest');
$router->post('/sessions', 'controller/sessions/store.php')->only('guest');
$router->delete('/sessions', 'controller/sessions/destroy.php')->only('auth');


//
$router->get('/todo','controller/todo/create.php');
$router->post('/todo/task','controller/todo/store.php');
$router->get('/todo/show','controller/todo/show.php');
$router->get('/todo/delete','controller/todo/delete.php');
$router->get('/todo/edit','controller/todo/edit.php');
$router->get('/todo/update','controller/todo/delete.php');


