<?php 
    ob_start();
?>

<div class="card m-auto mt-5" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Par : <?= strtoupper($tablivre['prenom'])." ". ucfirst($tablivre['nom']); ?></h5>
        <p class="card-text"><?= $tablivre['resume'] ?></p>
        <p class="card-text"><?= $tablivre['prix'] ?></p>
        <p class="card-text"><?= $tablivre['edition'] ?></p>
        <p class="card-text"><?= $tablivre['langue'] ?></p>
    </div>
</div>
<?php 
    $title = "un livre";
    $content=ob_get_clean();
    require 'view/template.php';
?>