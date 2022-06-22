<?php 
    require 'controller/controller.php';

    if(isset($_GET['page']))
    {
        if($_GET['page']=="oneLivre" && $_GET['id']> 0)
        {
            displayLivre();
        }
        elseif($_GET["page"]=="allBooks")
        {
            displayAllBooks();
        }
        elseif($_GET["page"]=="allAuthors")
        {
            displayAllAuthors();
        }
    }
    else
    {
        displayAllBooks();
    }

?>