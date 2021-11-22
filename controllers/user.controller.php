<?php
include_once ('models/user.model.php');
include_once ('models/admin.model.php');
include_once('api/APIViews.php');

class UserController{
    private $userModel;
    private $view;
    private $model;

    public function __construct()
    {
        $this ->userModel = new userModel();
        $this->view = new APIView();
        $this->model = new BooksModel();
    }

    private function getData() {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    public function insertComent($params=null)
    {
        $data = $this->getData();
        $comentario = $data->comentario;
        $puntuacion = $data->puntuacion;
        $usuario = $data->usuario;
        $libro = $data->id_libro;


        $id = $this->userModel->postComent($comentario, $puntuacion, $usuario, $libro);

        $coment = $this->model->getComment($id);
        if($coment)
            $this->view->response($coment);
        else
            $this->view->response("El comentario no pudo ser posteado",500);

    }
    
    public function getAll($params=null) {
        $coments = $this->userModel->getAllComents();
        $this->view->response($coments,200);

    }


}