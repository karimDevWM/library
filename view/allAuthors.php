<?php 
    ob_start(); // ouvre enregistrement de tout le html
    foreach($tabAuthors as $author)
    {
?>
<div class="container m-auto w-25 mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $author['nom'] ?></h5>
                    <p class="card-text"><?= $author['prenom'] ?></p>
                    <p class="card-text"><?= $author['pays'] ?></p>
                    <p class="card-text"><?= $author['date_deces'] ?></p>
                    <a href="index.php?page=oneLivre&id=<?= $author['id']?>" class="card-link">Plus d'infos</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php
    }
?>
<?php 
    $title = "tous les auteurs";
    $content = ob_get_clean();

    require 'view/template.php';
?>