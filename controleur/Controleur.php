<?php
echo getcwd();

require_once 'model/Article.php';
/*require_once 'model/Personne.php';
require_once 'model/Client.php';
require_once 'model/Commandes.php';
require_once 'model/Employe.php';
//require_once 'model/Modele.php';
require_once 'model/Personne.php';
require_once 'model/Producteur.php';
require_once 'model/Statut.php';*/
require_once 'model/Cnx.php';

include 'vue/HTML/header.php';

$cnx=new Cnx();
$article =new Article($cnx);
$arrayarticles=$article->getArticles();


$arraycadreproduit=$article->getCadreProduit($cnx);

foreach ($arrayarticles as $article){
    echo $article->libelleA;
    }

foreach($arraycadreproduit as $data){
    include 'vue/HTML/liste_produits.php';
    
}

include 'vue/HTML/liste_produits.php';
?>
