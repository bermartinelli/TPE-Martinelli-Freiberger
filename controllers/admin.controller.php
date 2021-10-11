<?php
require_once 'models/admin.model.php';
require_once 'models/model.php';
require_once 'views/login.view.php';
require_once 'helpers/auth.helper.php';

class adminController
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->loginView = new loginView();
        $this->authHelper = new AuthHelper();
        $this->model = new booksModel();
        $this->view = new booksView();
        $this->authHelper = new AuthHelper();
    }


    public function showLogin()
    {
        $this->loginView->showLogin();
    }

    public function login()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->adminModel->getUser($username);

            if ($user && password_verify($password, $user->password)) {
                $this->authHelper->login($user);
                header("Location: " . BASE_URL);
            } else {
                $this->loginView->showLogin("Usuario o contraseña incorrectos");
            }
        }
    }

    function logout()
    {
        session_destroy();
        $this->authHelper->logout();
    }

    public function showAdminOptions()
    {
        $this->authHelper->checkLogedIn();
        $dataLibros = $this->model->getAllData();
        $dataAutores = $this->model->getAuthorsData();
        $this->view->showAddAndEdit($dataLibros, $dataAutores);
    }

    public function addBook()
    {
        if (!empty($_POST['nombre']) && !empty($_POST['genero']) && !empty($_POST['capitulos']) && !empty($_POST['editorial']) && !empty($_POST['anio'])) {
            $nombre = $_POST['nombre'];
            $genero = $_POST['genero'];
            $capitulos = $_POST['capitulos'];
            $editorial = $_POST['editorial'];
            $anio = $_POST['anio'];
            $autor = $_POST['autor'];
            $this->adminModel->addBook($nombre, $genero, $capitulos, $editorial, $anio,$autor);

            header("Location: " . BASE_URL . "admin");
        }
    }

    public function deleteBook($id)
    {
        $this->adminModel->eraseBook($id);
        header("Location: " . BASE_URL);
    }

    public function deleteAuthor($id)
    {
        $this->adminModel->eraseAuthor($id);
        header("Location: " . BASE_URL);
    }
}
