<?php
$router->get('/', 'controller/index.php');
$router->get('/contact', 'controller/contact.php');
$router->get('/about', 'controller/about.php');
$router->get('/notes', 'controller/notes/index.php')->only('auth');
$router->get('/notes/create', 'controller/notes/create.php');
$router->post('/notes', 'controller/notes/store.php');

$router->delete('/note', 'controller/notes/destroy.php');
$router->get('/note', 'controller/notes/show.php');
$router->get('/note/edit', 'controller/notes/edit.php');
$router->patch('/note', 'controller/notes/update.php');

$router->get('/register', 'controller/registration/create.php')->only('guest');
$router->post('/register', 'controller/registration/store.php')->only('guest');

$router->get('/login', 'controller/sessions/create.php')->only('guest');
$router->post('/sessions', 'controller/sessions/store.php')->only('guest');
$router->delete('/sessions', 'controller/sessions/destroy.php')->only('auth');


//
$router->get('/todo', 'controller/todo/create.php')->only('auth');
$router->post('/todo/task', 'controller/todo/store.php');
$router->get('/todo/show', 'controller/todo/show.php');
$router->get('/todo/delete', 'controller/todo/delete.php');
$router->get('/todo/edit', 'controller/todo/edit.php');
$router->post('/todo/update', 'controller/todo/update.php');

// password reset

$router->get('/reset','controller/reset/reset.php');
$router->post('/reset/password','controller/reset/password.php');
$router->post('/reset/new','controller/reset/new.php');


// reset email

$router->get('/change/email','controller/email/index.php');

$router->post('/email/update','controller/email/update.php');
$router->post('/email/new','controller/email/newEmail.php');



// product
$router->get('/product','controller/product/add.php');
$router->post('/product/add','controller/product/list.php');
$router->post('/product/show','controller/product/show.php');


// password change current password


$router->get('/change/password','controller/password/show.php');

$router->post('/password/update','controller/password/update.php');