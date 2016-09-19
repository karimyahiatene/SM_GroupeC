<?php

class Article {
        private $cnx;

    function __construct($cnx) {
        $this->cnx = $cnx;
    }
    
public function getArticles($id='all') {
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

    public function getCadreProduit($cnx){
    //$codeCategorie = $_GET['categorie'];//AND appartenir.codeC = :categorie 
    $sql = "SELECT * FROM appartenir, tb_article, tb_categorie WHERE tb_article.codeA = appartenir.codeA AND appartenir.codeC = tb_categorie.codeC LIMIT 9";
    $pdo_select = $cnx->prepare($sql);
   // $pdo_select->bindValue(':categorie', $codeCategorie);
    $pdo_select->execute();   
    $cadreproduit=$pdo_select->fetchAll(PDO::FETCH_OBJ);
    return $cadreproduit;
    }
            
 


}
