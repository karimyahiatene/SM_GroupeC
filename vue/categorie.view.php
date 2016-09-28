<?php $titrePage = 'Categorie'; ?>
<?php ob_start(); ?>
<div id="cadreProduits">
    <?php 
    if (!empty($articles))
        echo '<h3>'.$articles[0]['libelleC'].'</h3>';
    else
        echo '<h2>Aucun produits</h2>';
    ?>
    <?php foreach ($articles as $article): ?>
                <div class="cadreProduit">
                    <img class="photo" src="<?php echo $article['photoA'] ?> "/>
                    <div class="rectangle">
                        <a href="?page=produit&cat=<?php echo $articles[0]['codeC'] ?>&id=<?php echo $article['codeA']?>"><img class="icon" src="vue/images/information.png"/></a>
                        <p class="prix"><?php echo $article['prixhtA'] ?></p>
                        <img class="icon" src="vue/images/prix.png"/>
                        <a href="<?php 
                                 $params = array_merge($_GET, array("del" => $article['codeA']));
                                 if(isset($_GET['add']))
                                     unset($params['add']);
                                 $new_query_string = http_build_query($params);
                                 echo "index.php?".$new_query_string;
                                 ?>" class="modifPanier"><img class="icon" src="vue/images/moins.png"/></a>
                        <a href="<?php
                                 $params = array_merge($_GET, array("add" => $article['codeA']));
                                 if(isset($_GET['del']))
                                     unset($params['del']);
                                 $new_query_string = http_build_query($params);
                                 echo "index.php?".$new_query_string;
                                 ?>" class="modifPanier"><img class="icon" src="vue/images/plus.png"/></a>
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