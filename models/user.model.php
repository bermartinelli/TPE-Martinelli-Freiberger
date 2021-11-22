<?php


class UserModel {
   
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=Localhost;'.'dbname=db_libros;charset=utf8', 'root', '');    
    }
    
    

    function postComent($comentario, $puntuacion, $usuario, $libro)
    {
        $query = $this->db->prepare('INSERT INTO comentarios(comentario, puntuacion, usuario, id_libro) VALUES(?,?,?,?)');
        $query->execute([$comentario, $puntuacion, $usuario, $libro]);
        return $this->db->lastInsertId();
    }

    function getAllComents()
    {
        $query = $this->db->prepare('SELECT * FROM comentarios');
        $query->execute();

        $coments = $query->fetchAll(PDO::FETCH_OBJ);
        return $coments;
    }
}