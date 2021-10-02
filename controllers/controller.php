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
        $dataLibros = $this->model->getAllData();
        $this->view->showBooks($dataLibros);
    }
}