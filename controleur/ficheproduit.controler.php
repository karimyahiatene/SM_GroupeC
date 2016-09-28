<?php
require_once('model/Article.model.php');
require_once("vue/fonctions.php");

$pdo = connectToDatabase();

$produit = Article::getArticle($_GET['id'],$pdo);

include_once('vue/ficheproduit.view.php');
?>