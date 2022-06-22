<?php 
    ob_start(); // ouvre enregistrement de tout le html
    foreach($tabBooks as $book)
    {
?>
<div class="container m-auto w-25 mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $book['titre'] ?></h5>
                    <p class="card-text"><?= $book['resume'] ?></p>
                    <p class="card-text"><?= $book['prix'] ?></p>
                    <p class="card-text"><?= $book['date_parution'] ?></p>
                    <p class="card-text"><?= $book['fk_genre'] ?></p>
                    <p class="card-text"><?= $book['edition'] ?></p>
                    <p class="card-text"><?= $book['langue'] ?></p>
                    <p class="card-text"><?= $book['image'] ?></p>
                    <p class="card-text"><?= $book['isbn'] ?></p>
                    <p class="card-text"><?= $book['stock'] ?></p>
                    <a href="index.php?page=oneLivre&id=<?= $book['id']?>" class="card-link">Plus d'infos</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php
    }
?>
<?php 
    $title = "tous les livres";
    $content = ob_get_clean();

    require 'view/template.php';
?>