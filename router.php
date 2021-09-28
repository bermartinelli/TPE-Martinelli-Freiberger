<?php
require_once 'controllers/controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'listar';
}

$params = explode('/', $action);

$controller = new booksController();

switch ($params[0]) {
    case 'listar':
        $controller->showBooks();
        break;
    default:
        echo '404 - Página no encontrada';
        break;
}
