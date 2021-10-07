<?php
require_once 'controllers/controller.php';
require_once 'controllers/userAuth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'verify':
        $authController = new AuthController();
        $authController->login();
        break;
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    case 'home':
        $controller = new booksController();
        $controller->showBooks();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
    case 'autor':
        $controller = new booksController();
        $controller->showInfoAuthor($params[1]);
        break;
    case 'libros':
        $controller = new booksController();
        $controller->showInfoBooks($params[1]);
        break;
    case 'genero':
        $controller = new booksController();
        $controller->genreFilter($params[1]);
        break;
    case 'adminHome':
        $controller = new Authcontroller();
        $controller->showAdminOptions();
        break;
    default:
        echo '404 - Página no encontrada';
        break;
}
