<?php

class AuthHelper {
    function __construct() {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function checkLogedIn(){
        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . BASE_URL);
            die();
        }
    }

    public function login($user) {
        $_SESSION['USER_ID'] = $user->id;
        $_SESSION['USER_NAME'] = $user->username;
    }

    function logout() {
        session_destroy();
        header("Location: " . BASE_URL);
    } 
}