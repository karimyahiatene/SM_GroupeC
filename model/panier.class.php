<?php
require_once("vue/fonctions.php");

class Panier{
    private $liste = array();
    private $nombreArticles = 0;
    private $prixTotal = 0.00;

    public function add_panier($codeArticle){
        global $pdo;

        $sql = "SELECT * FROM tb_article WHERE codeA = :codeArticle";
        $pdo_select = $pdo->prepare($sql);
        $pdo_select->bindValue(':codeArticle', $codeArticle);
        $pdo_select->execute();
        $donnee = $pdo_select->fetch();

        if(!empty($this->liste)){
            if (array_key_exists($donnee['codeA'], $this->liste)){
                $this->liste[$donnee['codeA']]['quantite'] += 1;
            }
            else{
                $donnee['quantite'] = 1;
                $this->liste[$donnee['codeA']] = $donnee;
            }
        }else{
                $donnee['quantite'] = 1;
                $this->liste[$donnee['codeA']] = $donnee;
        }
    $this->nombreArticles += 1; 
        }
	$this->prixTotal += $donnee['prixhtA'];
    $this->nombreArticles += 1;
    }

    public function del_panier($codeArticle){
        if (!empty ($this->liste)){
			$this->prixTotal -= $this->liste[$codeArticle]['prixhtA'];
            $this->liste[$codeArticle]['quantite'] -= 1;
            if ($this->liste[$codeArticle]['quantite'] == 0)
                unset($this->liste[$codeArticle]);
        }
    $this->nombreArticles -= 1;
    }

    public function getPanier(){
        return $this->liste;
    }

	public function getTotal(){
		return $this->prixTotal;
	}
?>