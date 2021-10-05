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

    public function showInfoBooks($tableQuery, $queryId){
        $dataQuery = $this->model->getBooksQueryData($tableQuery, $queryId);
        $this->view->showData($dataQuery);

    }

    public function showInfoAuthor($tableQuery, $queryId){
        $dataQuery = $this->model->getAuthorQueryData($tableQuery, $queryId);
        $this->view->showData($dataQuery);

    }
    public function genreFilter($tableGenre){

    }
    
}