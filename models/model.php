<?php

class booksModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_libros;charset=utf8', 'root', '');
    }

    //Obtiene todos los libros de la db
    function getAllData()
    {
        $query = $this->db->prepare('SELECT libros.*, autor.nombre as autor FROM libros JOIN autor ON libros.id_autor_fk = autor.id_autor');
        $query->execute();
        
        $Booksdata = $query->fetchAll(PDO::FETCH_OBJ); 

        return $Booksdata;
    }

}
