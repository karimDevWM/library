<?php 
    require_once 'Bdd.php';

    class Livre extends Bdd
    {
        public function getAllBooks()
        {
            // chercher tous les livres
            $bdd = $this->dbConnect();
            $req = $bdd->query("SELECT * FROM livre");
            $livres = $req->fetchAll(PDO::FETCH_ASSOC);

            return $livres;
        }

        public function getBook($idLivre)
        {
            // chercher un seul livre par l'id
            $bdd = $this->dbConnect();
             $req = $bdd->query("SELECT * FROM `livre` 
                                INNER JOIN auteur ON livre.fk_auteur = auteur.id
                                WHERE livre.id = ".$idLivre);
             $livre = $req->fetch(PDO::FETCH_ASSOC);

             return $livre;
        }
    }
?>