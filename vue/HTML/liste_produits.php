
<?php
/*
    $codeCategorie = $_GET['categorie'];
    $sql = "SELECT * FROM appartenir, tb_article, tb_categorie WHERE tb_article.codeA = appartenir.codeA AND appartenir.codeC = tb_categorie.codeC AND appartenir.codeC = :categorie LIMIT 9";
    $pdo_select = $pdo->prepare($sql);
    $pdo_select->bindValue(':categorie', $codeCategorie);
    $pdo_select->execute();


    echo '<div id="cadreProduits">';
 */
include 'fonctions.php';
    while ($data = $pdo_select->fetch())
    {
 
?>
    

<div class="cadreProduit">
    <img class="photo" src="images/produits/<?php echo $data->libelleC ?>/<?php echo $data->libelleA?>.jpg"/>
     <div class="rectangle">
      <img class="icon" src="images/information.png"/>
      <p class="prix"><?php echo $data->prixhtA ?></p>
      <img class="icon" src="images/prix.png"/>
       <a href="<?php add_panier();?>"><img class="icon" src="images/moins.png"></a>
      <a href="<?php del_panier();?>"><img class="icon" src="images/plus.png"></a>
      </div>
</div> 
<?php } ?>
       