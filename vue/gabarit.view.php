<!DOCTYPE html>
<html>
    <head>
        <title>Speedy-Market: <?= $titrePage ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="vue/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once("fonctions.php"); ?>
        <?php require_once("model/panier.class.php"); ?>
        <?php $pdo = connectToDatabase(); ?>
        <div>
           <header>
                <img id="logo" src="vue/images/logo.png" title="logo speedy market" alt="logo speedy market"/>
               
                        <form action="" class="formulaire">
                            <input class="champ" type="text" value=""/>
                            <input class="bouton" type="button" value=" "/>
                        </form>
                
                <nav id="nav_header">
                    <ul class="liste">
                        <li>Bonus</li>
                        <li>Historique</li>
                        <li>Deconnexion</li>
                        <li id="different">Bonjour M Toto</li>
                    </ul>
                </nav>    
            </header>
            <nav id="navigation">
                <ul id="menu">
                    <li>Mon Drive</li>
                    <li>Qui Sommes nous</li>
                    <li>Nos Champs</li>
                    <li>Nos Recettes</li>
                    <li id="exception">Nos Promos</li>
                </ul>
            </nav>
        </div>
        <div id="content">
            <nav id="navigation_produits">
                <?php
                $sql ="SELECT codeC, libelleC, codeC_parent FROM tb_categorie ORDER BY codeC_parent, libelleC";
                try{
                    // Tableau qui contient la liste
                    $menu = array(
                        'items' => array(),
                        'parents' => array()
                    );
                    $pdo_select = $pdo->prepare($sql);
                    $pdo_select->execute();
                    // Construit la liste depuis les donn�es dans la DB
                    while ($items = $pdo_select->fetch())
                    {
                        $menu['items'][$items['codeC']] = $items;
                        $menu['parents'][$items['codeC_parent']][] = $items['codeC'];
                    }
                } catch (PDOException $e)
                {
                    echo 'Erreur SQL : '. $e->getMessage().'<br />'; die();
                }
                echo '<ul id="produits">';
                echo buildMenu(0,'', $menu);
                echo '</ul>';
                ?>
            </nav>
            <?php /*Inclue la page demand�e*/ ?>
            <?= $contenuPage ?>
            <div id ="panier">
                <?php $ListePanier=new Panier();?>
                <div id="titre">Panier</div>
                    <div id="bleu">
                        <div id="panierListe">
                            <?php
                             $ArrayPanier=$ListePanier->getPanier();
                             if (!empty($ArrayPanier)){
                             foreach ($ArrayPanier as $ligne)
                                 ?><p><?php echo $ligne["libelleA"] ?> <?php echo $ligne["quantite"] ?> à <?php echo $ligne["prixhtA"] ?> <img class="icone" src="vue/images/prix.png"/></p>;
                            <?php } ?>
                                 
                            
                                                                                                           
                        </div>
                        <div id="trait"></div>
                        <p>Total = 16.0 <img class="icone" src="vue/images/prix.png"/></p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div id="contact">
                <ul id="listing">
                    <li><img src="vue/images/phone.jpg"/><p>05 66 40 53 21</p></li>
                    <li><img src="vue/images/fax.jpg"/> <p>05 25 24 15 86</p></li>
                    <li><img src="vue/images/mail.jpg"/> <p>Speedy@toto.fr</p></li>
                </ul>
            </div>
            <div class="horaires">
                <img class="carre" src="vue/images/horloge.png"/>
                <p>Nos magasins sont ouverts toute la semaine de 8h00 � 20h00 non stop !</p>
            </div>
            <div class="coordonees">
                <img class="carre" src="vue/images/maison.png"/>
                <p>SIEGE SPEEDYMARKET<br/>
                    11 Avenue des codos<br/>
                    64000 PAU</p>
            </div>
            <div class="paye">
                <img class="carre" src="vue/images/euro.png"/>
                <img class="banque" src="vue/images/cartes.jpg"/>
            </div>
        </footer>
    </body>
</html>
