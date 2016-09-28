<?php $titrePage = 'ficheproduit'; ?>

<?php ob_start(); ?>

<?php
    $pos = 0;
    $pdo = connectToDatabase();
    $listArticles = Article::getArticlesFromCategorieFiche($_GET['cat'], $pdo);
    foreach ($listArticles as $article) {
        if($article['codeA'] == $_GET['id']){
            $pos = key($listArticles);
        }
    }
        $pos_init = $pos;
        prev($listArticles);
        prev($listArticles);
        $pos = key($listArticles);
        echo '<a href="?page=produit&cat='.$_GET['cat'].'&id='. $listArticles[$pos]['codeA'].'"><img class="flecheg" src="vue/images/flecheg.png" /></a>';

?>

<div class="ficheproduit">
    <div class="floot">
    <h2><?php echo $produit['libelleA']; ?></h2>
    <p><?php echo $produit['descriptionA']; ?></p>
    </div>
    <img class="fruta" src="<?php echo $produit['photoA']; ?>" />
    <div class="renseigne">
        <div class="rectangulitog">
            <h4><?php echo $produit['prixhtA']; ?></h4>
            <img class="icones" src="vue/images/prix.png" />
        </div>
        <div class="rectangulitod">
            <img class="iconeg" src="vue/images/plus.png" />
            <h4>5</h4>
            <img class="iconed" src="vue/images/moins.png" />
        </div>
    </div>
</div>



<?php
    next($listArticles);
    next($listArticles);
    $pos = key($listArticles);
   echo '<a href="?page=produit&cat='.$_GET['cat'].'&id='. $listArticles[$pos]['codeA'].'"><img class="fleched" src="vue/images/fleched.png" /></a>';
?>






<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>