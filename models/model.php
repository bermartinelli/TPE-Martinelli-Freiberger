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

        $booksData = $query->fetchAll(PDO::FETCH_OBJ);

        return $booksData;
    }

    function getBooksQueryData($queryId)
    {
        $query = $this->db->prepare('SELECT * FROM libros WHERE id_libros =' . $queryId);
        $query->execute();

        $queryData = $query->fetchAll(PDO::FETCH_OBJ);
        return $queryData;
    }

    function getAuthorQueryData($queryId)
    {
        $query = $this->db->prepare('SELECT * FROM autor WHERE id_autor =' . $queryId);
        $query->execute();

        $queryData = $query->fetchAll(PDO::FETCH_OBJ);

        return $queryData;
    }

    function getFilteredBooks($bookGenre)
    {
        $query = $this->db->prepare('SELECT libros.*, autor.nombre as autor FROM libros JOIN autor ON libros.id_autor_fk = autor.id_autor WHERE genero = "'.$bookGenre .'" ');
        $query->execute();

        $queryData = $query->fetchAll(PDO::FETCH_OBJ);

        return $queryData;
    }

    function getBooksByAuthor($queryId)
    {
        $query = $this->db->prepare('SELECT libros.*, autor.nombre as autor FROM libros JOIN autor ON libros.id_autor_fk = autor.id_autor WHERE autor.id_autor ='.$queryId);
        $query->execute();

        $queryData = $query->fetchAll(PDO::FETCH_OBJ);

        return $queryData;
    }

    function eraseBook($id) {
        $query = $this->db->prepare('DELETE FROM libros WHERE id_libros= ?');
        $query-> execute([$id]);
    }

    function eraseAuthor($id) {
        $query = $this->db->prepare('DELETE FROM autor WHERE id_autor= ?');
        $query-> execute([$id]);
    }
}
