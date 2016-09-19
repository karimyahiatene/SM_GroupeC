<!DOCTYPE html>
<html>
    <head>
        <title>Speedy-Market</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once("fonctions.php"); ?>
        <?php $pdo = connectToDatabase(); ?>
        <div>
           <?php include_once("header.php"); ?>
            
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
            
            <?php include_once("side_menu.php"); ?>
            
            <?php if(isset($_GET['categorie']))
                    include_once("liste_produits.php");
                else
                    include_once("home.php");
            ?>
                
            
            <div id ="panier">
                <div id="titre">Panier</div>
                    <div id="bleu">
                        <div id="panierListe">
                            <p>pommes 5 à 2.0 <img class="icone" src="images/prix.png"/></p>
                            <p>bananes 3 à 2.0 <img class="icone" src="images/prix.png"/></p>
                            <p>pommes 5 à 2.0 <img class="icone" src="images/prix.png"/></p>
                            <p>bananes 3 à 2.0 <img class="icone" src="images/prix.png"/></p>
                            <p>pommes 5 à 2.0 <img class="icone" src="images/prix.png"/></p>
                                                        <p>bananes 3 à 2.0 <img class="icone" src="images/prix.png"/></p>
                            <p>pommes 5 à 2.0 <img class="icone" src="images/prix.png"/></p>  
                                                        <p>bananes 3 à 2.0 <img class="icone" src="images/prix.png"/></p>
                            <p>pommes 5 à 2.0 <img class="icone" src="images/prix.png"/></p>                                                                                    
                        </div>
                        <div id="trait"></div>
                        <p>Total = 16.0 <img class="icone" src="images/prix.png"/></p>
                    </div>
                </div>
            </div>
            
            
            
    </div>
     <?php include_once("footer.php"); ?>   
    </body>
</html>
