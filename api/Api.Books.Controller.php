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

    
}
