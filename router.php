<?php
require_once 'controllers/controller.php';
require_once 'controllers/admin.controller.php';

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
        $authController = new adminController();
        $authController->login();
        break;
    case 'login':
        $authController = new adminController();
        $authController->showLogin();
        break;
    case 'home':
        $controller = new booksController();
        $controller->showBooks();
        break;
    case 'logout':
        $authController = new adminController();
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
    case 'admin':
        $controller = new adminController();
        $controller->showAdminOptions();
        break;
    case 'deleteBook':
        $controller = new adminController();
        $controller->deleteBook($params[1]);
    case 'deleteAuthor':
        $controller = new adminController();
        $controller->deleteAuthor($params[1]);
    case 'addBook':
        $controller = new booksController();
    default:
        echo '404 - Página no encontrada';
        break;
}
