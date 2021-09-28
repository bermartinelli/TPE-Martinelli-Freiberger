<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class booksView {
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showBooks($books){
        $this->smarty->assign('cabeceraCol_1', 'Nombre del Libro');
        $this->smarty->assign('cabeceraCol_2', 'Genero');
        $this->smarty->assign('cabeceraCol_3', 'Año de publicacion');

        $this->smarty->assign('books', $books);

        
        $this->smarty->display('templates/tableBooks.tpl');
        
    }
}