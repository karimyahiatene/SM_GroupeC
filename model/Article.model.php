<?php
require_once ("vue/fonctions.php");
class Article {
    
    public function getArticles($id='all')
    {
        $s="SELECT * FROM tb_article";

        if(is_int($id)){

        $s .="WHERE id = :id";
                }
        $r=$this->cnx->prepare($s);
        if(is_int($id)){
            
        $r->bindValue('codeA',$id,PDO::PARAM_INT);

        }
        $r->execute();
        $resultat=$r->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
    }
 
    static private function getNumberArticleFromCategorie($categorie, $pdo)
    {
        $sql = "SELECT COUNT(*) AS total FROM appartenir, tb_article, tb_categorie WHERE tb_article.codeA = appartenir.codeA AND appartenir.codeC = tb_categorie.codeC AND appartenir.codeC = :categorie";
        $pdo_select = $pdo->prepare($sql);
        $pdo_select->bindValue(':categorie', $categorie);
        $pdo_select->execute();
        $donnee = $pdo_select->fetch();

        $nombreDeProduits = $donnee['total'];
        return $nombreDeProduits;
    }
    
    static public function getNumberPageOfCategorie($categorie, $pdo)
    {
        $nombreDePage = self::getNumberArticleFromCategorie($categorie, $pdo) /9;

        if (is_float($nombreDePage))
            $nombreDePage = $nombreDePage +1;
        return $nombreDePage;
    }    
      
    static public function getArticlesFromCategorie($categorie, $pageActuelle, $pdo)
    {
        $premiereEntree = ($pageActuelle -1)* 9;

        $sql = "SELECT * FROM appartenir, tb_article, tb_categorie WHERE tb_article.codeA = appartenir.codeA AND appartenir.codeC = tb_categorie.codeC AND appartenir.codeC = :categorie LIMIT :premierproduit , 9";
        $pdo_select = $pdo->prepare($sql);
        $pdo_select->bindValue(':categorie', $categorie);
        $pdo_select->bindValue(':premierproduit', $premiereEntree, PDO::PARAM_INT);
        $pdo_select->execute();
        return $pdo_select->fetchAll();
    }
}
