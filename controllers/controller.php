<?php
include_once('models/model.php');
include_once('views/view.php');

class booksController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new booksModel();
        $this->view = new booksView();
    }

    public function showAuthors(){

        $dataAutores = $this->model->getAuthorsData();
        $this->view->showAuthors($dataAutores);
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
        $booksByAuthor = $this->model->getAuthorQueryData($queryId);

        $this->view->showAuthorData($booksByAuthor);
    }

    public function genreFilter($bookGenre)
    {
        $dataQuery = $this->model->getFilteredBooks($bookGenre);
        $this->view->showBooks($dataQuery);
    }

    
}
