<?php
require_once("model/panier.class.php");

session_start();
$pdo = connectToDatabase();

if(isset($_SESSION['panier']))
    $ListePanier = new Panier($_SESSION['panier'], $_SESSION['totalPanier']);
else
    $ListePanier = new Panier(array(), 0);
//$_SESSION['totalPanier'] = 0;

if (isset($_GET['add'])) {
    $ListePanier->add_panier($_GET['add']);
    $_SESSION['panier'] = $ListePanier->getPanier();
    $_SESSION['totalPanier'] = $ListePanier->getTotal();
}

if (isset($_GET['del'])) {
    $ListePanier->del_panier($_GET['del']);
    $_SESSION['panier'] = $ListePanier->getPanier();
    $_SESSION['totalPanier'] = $ListePanier->getTotal();
}

if (!isset($_GET['page']) OR $_GET['page'] == 'accueil')
{
    include_once('controleur/accueil.controler.php');
}
else if ($_GET['page'] == 'categorie')
{
    include_once('controleur/categorie.controler.php');
}
else if ($_GET['page'] == 'produit')
{
    include_once('controleur/ficheproduit.controler.php');
}
else if ($_GET['page'] == 'login')
{
    include_once('controleur/login.controler.php');
}
else
{
    include_once('controleur/erreur.controler.php');
}

?>