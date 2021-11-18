<?php
include_once ('models/model.php');
include_once('api/APIViews.php');

class ApiBooksController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new booksModel();
        $this->view = new APIView();
    }

    public function getAll($params = null){
        $books = $this->model->getAllData();
        $this->view->response($books, 200);
    }

    public function getOne($params = null){
        $id = $params[':ID'];
        $book = $this->model->getBooksQueryData($id);

        if($book){
            $this->view->response($book, 200);
        }
        else{
            $this->view->response("Task id= $id not found", 404);
        }

    }
}
