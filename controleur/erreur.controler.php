<?php

if ($_GET['page'] != 'accueil' ||
    $_GET['page'] != 'categorie' ||
    $_GET['page'] != 'produit'
    )
    $codeErreur = 1;

include_once('vue/erreur.view.php');
?>