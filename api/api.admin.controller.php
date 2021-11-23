<?php
require_once 'models/admin.model.php';
require_once 'models/model.php';
require_once 'models/user.model.php';
require_once 'api/APIViews.php';

class ApiAdminController {
    private $model;
    private $adminModel;
    private $userModel;
    private $apiView;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->userModel = new UserModel();
        $this->model = new booksModel();
        $this->apiView = new APIView();
    }

    function deleteComent($params=null) {
        $id = $params[':ID'];
        $coment = $this->model->getComment($id);

        if($coment) {
         $coment = $this->adminModel-> eraseComment($id);
         $this->apiView->response("El comentario con id=$id fue eliminado con exito",200);
        } else 
            $this->apiView->response("El comentario con id=$id no fue encontrado",404);

    }
}