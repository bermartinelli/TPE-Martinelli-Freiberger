<?php

class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_libros;charset=utf8', 'root', '');
    }

    function eraseUser($id)
    {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id = ?');
        $query->execute([$id]);
    }

    function setAsAdmin($id)
    {
        $query = $this->db->prepare('UPDATE `usuarios` SET `rol` = 1 WHERE id=?');
        $query->execute([$id]);
    }
    
    function changeRol($id){
        $query = $this->db->prepare('UPDATE `usuarios` SET `rol` = 0 WHERE id=?');
        $query->execute([$id]);
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

    function editBook($nombre, $genero, $capitulos, $editorial, $anio, $autor, $id_libros) {
        $query = $this->db->prepare('UPDATE `libros` SET `nombre` = ?, `genero` = ?, `capitulos` = ?, `editorial` = ?, `anio` = ?, `id_autor_fk` = ? WHERE `libros`.`id_libros` = ?');
        $query->execute([$nombre, $genero, $capitulos, $editorial, $anio, $autor, $id_libros]);
    }

    function addAuthor($nombre, $nacimiento, $muerte, $nacionalidad) {
        $query = $this->db-> prepare ('INSERT INTO `autor` (`id_autor`, `nombre`, `nacimiento`, `muerte`, `nacionalidad`) VALUES (NULL, ?, ?, ?, ?)');
        $query -> execute([$nombre, $nacimiento, $muerte, $nacionalidad]);
    }

    function editAuthor($nombre, $nacimiento, $muerte, $nacionalidad, $id_autor) {
        $query = $this->db->prepare('UPDATE `autor` SET `nombre` = ?, `nacimiento` = ?, `muerte` = ?, `nacionalidad` = ? WHERE `autor`.`id_autor` = ?');
        $query->execute([$nombre, $nacimiento, $muerte, $nacionalidad, $id_autor]);
    }

    function eraseComment($id) {
        $query = $this->db->prepare('DELETE FROM comentarios WHERE id=?');
        $query->execute([$id]);
    }
    

}
