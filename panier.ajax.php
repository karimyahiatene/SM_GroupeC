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
   
 if (!empty($ListePanier->getPanier())):
    foreach ($ListePanier->getPanier() as $ligne):
    ?>
<p><?= $ligne["libelleA"] ?> <?= $ligne["quantite"] ?> à <?= $ligne["prixhtA"] ?> <img class="icone" src="vue/images/prix.png"/></p>
    <?php endforeach;
     ?><div id="titre">Total = <?= $ListePanier->getTotal() ?> <img class="icone" src="vue/images/prix.png"/></div>
   <?php endif;?>
   
