<?php
include_once ('libs/Router.php');
include_once ('api/Api.Books.Controller.php');

$router = new Router();

$router->addRoute('books','GET','ApiBooksController', 'getAll');
$router->addRoute('books/:ID', 'GET', 'ApiBooksController', 'getOne');

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);