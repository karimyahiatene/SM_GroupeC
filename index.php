<?php


if (!isset($_GET['page']) OR $_GET['page'] == 'accueil')
{
    include_once('controleur/accueil.controler.php');
}
else if ($_GET['page'] == 'categorie')
{
    include_once('controleur/categorie.controler.php');
}
else
{
    include_once('controleur/erreur.controler.php');
}
?>