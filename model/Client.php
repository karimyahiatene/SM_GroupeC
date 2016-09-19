<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of client
 *
 * @author alexa
 */
class Client extends Personne{
    //put your code here
    
    /**
     * @var date Date a laquelle le client s'est inscrit
     */
    private $dateinscription;
    

    
    function getDateInscription() {
        return $this->dateinscription;
    }

    
    function setDateInscription(date $dateinscription) {
        $this->dateinscription = $dateinscription;
    }

    function __construct(date $dateinscription) {
        $this->dateinscription = $dateinscription;
    }


    
}
