<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producteur
 *
 * @author alexa
 */
class Producteur extends Personne{
    //put your code here
    /**
     * @var string Lien pour la photo du producteur
     */
    private $photoP;
    
    /**
     * @var string Raison social de l'entreprise du producteur
     */
    private $raisonsocP;

    
    
    function getPhotoP() {
        return $this->photoP;
    }

    function getRaisonSocP() {
        return $this->raisonsocP;
    }


    function setPhotoP($photoP) {
        $this->photoP = $photoP;
    }

    function setRaisonSocP($raisonsocP) {
        $this->raisonsocP = $raisonsocP;
    }
    function __construct($photoP, $raisonsocP) {
        $this->photoP = $photoP;
        $this->raisonsocP = $raisonsocP;
    }



}
