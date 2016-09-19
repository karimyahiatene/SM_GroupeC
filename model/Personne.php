<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe anonyme parente de producteur, employe, et client avec comme paramètre le mail, le mdp, le tel, le nom et le code.
 *
 * @author alexa
 */
abstract class Personne {
    //put your code here
    /**
     * @var string clé unique de personne
     */
    private $code;
    
    /**
     * @var string Mail de la personne
     */
    private $mail;
    
    /**
     * @var string mot de passe de l'utilisateur
     */
    private $mdp;
    
    /**
     * @var string Téléphone de l'utilisateur
     */
    private $tel;
    
    /**
     * @var string Nom de l'utilisateur
     */
    private $nom;
    
    function getCode() {
        return $this->code;
    }

    function getMail() {
        return $this->mail;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getTel() {
        return $this->tel;
    }

    function getNom() {
        return $this->nom;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }
    function __construct($code, $mail, $mdp, $tel = 'null', $nom) {
        $this->code = $code;
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->tel = $tel;
        $this->nom = $nom;
    }


}
