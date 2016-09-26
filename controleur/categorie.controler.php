<?php
require_once('model/Article.model.php');
require_once("vue/fonctions.php");
require_once("model/panier.class.php");

$pdo = connectToDatabase();

$nombreDePage = Article::getNumberPageOfCategorie($_GET['categorie'], $pdo);

if(isset($_GET['npage']))
{
    $pageActuelle = intval($_GET['npage']);

    if($pageActuelle > $nombreDePage)
        $pageActuelle = $nombreDePage;
}
else
    $pageActuelle = 1;
/*
if (isset($_GET['add'])) {
    $ListePanier->add_panier($_GET['add']);
}

if (isset($_GET['del'])) {
    $ListePanier->del_panier($_GET['add']);
}*/

$articles = Article::getArticlesFromCategorie($_GET['categorie'], $pageActuelle ,$pdo);
// On affiche la page
include_once('vue/categorie.view.php');
?>