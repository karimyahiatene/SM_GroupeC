<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Statut
 *
 * @author yahiatene
 */
class Statut {
private $id_statut;
private $libelle;
public function __construct($id_statut, $libelle) {
    $this->id_statut = $id_statut;
    $this->libelle = $libelle;
}
public function getId_statut() {
    return $this->id_statut;
}

public function getLibelle() {
    return $this->libelle;
}

public function setId_statut($id_statut) {
    $this->id_statut = $id_statut;
}

public function setLibelle($libelle) {
    $this->libelle = $libelle;
}


}
