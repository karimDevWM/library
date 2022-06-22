<?php 

    require 'model/Livre.php';
    require 'model/Auteur.php';

    function displayAllBooks()
    {
        $books = new Livre();

        $tabBooks = $books->getAllBooks();

        require 'view/allBook.php';
    }

    function displayLivre(){
        $livre = new Livre();
    
        $tablivre = $livre->getBook($_GET['id']);
                
        require "view/oneBook.php";
    }

// ===========================================================================

    function displayAllAuthors()
    {
        $authors = new Auteur();

        $tabAuthors = $authors->getAllAuthors();

        require 'view/allAuthors.php';
    }

    function displayAuteur(){
        $auteur = new Auteur();
    
        $tabAuteur = $auteur->getAuthor($_GET['id']);
                
        require "view/oneAuthor.php";
    }
    
?>