<?php

class booksModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_libros;charset=utf8', 'root', '');
    }

    //Obtiene todos los libros de la db
    function getAllBooks()
    {
        $query = $this->db->prepare('SELECT * FROM libros');
        $query->execute();
        
        $books = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS las tareas

        return $books;
    }
}
