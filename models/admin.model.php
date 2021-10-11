<?php

class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_libros;charset=utf8', 'root', '');
    }

    function getUser($username)
    {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
        $query->execute([$username]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function eraseBook($id)
    {
        $query = $this->db->prepare('DELETE FROM libros WHERE id_libros= ?');
        $query->execute([$id]);
    }

    function eraseAuthor($id)
    {
        $query = $this->db->prepare('DELETE FROM autor WHERE id_autor= ?');
        $query->execute([$id]);
    }

    function addBook($nombre, $genero, $capitulos, $editorial, $anio, $autor)
    {
        $query = $this->db->prepare('INSERT INTO libros (nombre, genero, capitulos, editorial, anio, id_autor_fk) VALUES (? , ? , ? , ? , ? , ? )');
        $query->execute([$nombre, $genero, $capitulos, $editorial, $anio, $autor]);
    }
}
