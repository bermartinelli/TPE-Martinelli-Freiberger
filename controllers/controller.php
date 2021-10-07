<?php

include_once('models/model.php');
include_once('views/view.php');
include_once('helpers/auth.helper.php');

class booksController
{
    private $model;
    private $view;

    private $authHelper;

    public function __construct()
    {
        $this->model = new booksModel();
        $this->view = new booksView();

        $this->authHelper = new AuthHelper();
    }
    public function showBooks()
    {
        $dataLibros = $this->model->getAllData();
        $this->view->showBooks($dataLibros);
    }

    public function showInfoBooks($queryId)
    {
        $dataQuery = $this->model->getBooksQueryData($queryId);
        $this->view->showData($dataQuery);  
    }

    public function showInfoAuthor($queryId)
    {
        $dataAuthor = $this->model->getBooksByAuthor($queryId);
        $this->view->showBooks($dataAuthor);

        $dataQuery = $this->model->getAuthorQueryData($queryId);
        $this->view->showData($dataQuery);
    }

    public function genreFilter($bookGenre)
    {
        $dataQuery = $this->model->getFilteredBooks($bookGenre);
        $this->view->showBooks($dataQuery);
    }

    public function showAdminOptions(){
        $this->authHelper->checkLogedIn();
        $dataLibros = $this->model->getAllData();
        $this->view->showAddAndEdit($dataLibros);     
    }

    public function deleteBook($id) {
        $this->model->eraseBook($id);
        header("Location: " . BASE_URL);
    }

    public function deleteAuthor($id) {
        $this->model->eraseAuthor($id);
        header("Location: " . BASE_URL);
    }
}
