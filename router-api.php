<?php
include_once ('libs/Router.php');
include_once ('controllers/admin.controller.php');
include_once ('controllers/user.controller.php');

$router = new Router();

$router->addRoute('comentarios','POST','UserController','insertComent');
$router->addRoute('comentarios','GET','UserController','getAll');
$router->addRoute('comentarios/:ID','DELETE', 'AdminController','deleteComent');


$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);