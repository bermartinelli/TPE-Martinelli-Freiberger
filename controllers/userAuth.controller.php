<?php
require_once './models/user.model.php';
require_once './views/login.view.php';
require_once './helpers/auth.helper.php';

class Authcontroller{
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new loginView();
        $this->authHelper = new AuthHelper();
    }

   
    public function showLogin(){
        $this->view->showLogin();
    }

    public function login(){
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->model->getUser($username);

            if ($user && password_verify($password, $user->password)) {
                $this->authHelper->login($user);
                header("Location: " . BASE_URL);
            }
            else {
                $this->view->showLogin("Usuario o contraseña incorrectos");
            }

        }
    }

    function logout() {
        session_destroy();
        $this->authHelper->logout();
    } 
}