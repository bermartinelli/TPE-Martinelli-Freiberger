<?php 

include_once('models/model.php');
include_once('views/view.php');

class booksController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new booksModel();
        $this->view = new booksView();
    }

    public function showBooks() {
        $libros = $this->model->getAllBooks();

        $this->view->showBooks($libros);
    }
}