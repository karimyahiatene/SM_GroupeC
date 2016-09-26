<?php
require_once('model/Article.model.php');
require_once("vue/fonctions.php");

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

$articles = Article::getArticlesFromCategorie($_GET['categorie'], $pageActuelle ,$pdo);
// On affiche la page
include_once('vue/categorie.view.php');
?>