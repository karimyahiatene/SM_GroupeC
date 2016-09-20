<?php $titrePage = 'Categorie'; ?>

<?php ob_start(); ?>
<div id="cadreProduits">
    <?php foreach ($articles as $article): ?>
                <div class="cadreProduit">
                    <img class="photo" src="<?php echo $article['photoA'] ?> "/>
                    <div class="rectangle">
                        <img class="icon" src="vue/images/information.png"/>
                        <p class="prix"><?php echo $article['prixhtA'] ?></p>
                        <img class="icon" src="vue/images/prix.png"/>
                        <a href="#"><img class="icon" src="vue/images/moins.png"/></a>
                        <a href="#"><img class="icon" src="vue/images/plus.png"/></a>
                    </div>
                </div> 
<?php endforeach; ?>
<?php
    echo '</div>';

    echo '<p id="pager">Page : ';
    for($i=1; $i<=$nombreDePage; $i++)
    {
        if($i==$pageActuelle)
         echo ' [ '.$i.' ] ';
        else
          echo ' <a href="index.php?page=categorie&categorie='.$_GET['categorie'].'&npage='.$i.'">'.$i.'</a> ';
    }
    echo '</p>';
?>
<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>