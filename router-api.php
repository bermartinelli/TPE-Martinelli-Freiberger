<?php
include_once ('libs/Router.php');
include_once ('api/Api.Books.Controller.php');

$router = new Router();


$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);