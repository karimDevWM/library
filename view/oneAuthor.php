<?php 
    ob_start();
?>

<div class="card m-auto mt-5" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= strtoupper($tabAuteur['prenom'])." ". ucfirst($tabAuteur['nom']); ?></h5>
        <p class="card-text"><?= $tabAuteur['resume'] ?></p>
    </div>
</div>
<?php 
    $title = "un auteur";
    $content=ob_get_clean();
    require 'view/template.php';
?>