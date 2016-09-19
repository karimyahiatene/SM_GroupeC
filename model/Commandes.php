<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commandes
 *
 * @author yahiatene
 */
class Commandes {
private $codeC;
private $dateC;
private $statutC;
private $newAttr;
private $code;
function __construct($codeC, $dateC, $statutC, $newAttr, $code) {
    $this->codeC = $codeC;
    $this->dateC = $dateC;
    $this->statutC = $statutC;
    $this->newAttr = $newAttr;
    $this->code = $code;
}
function getCodeC() {
    return $this->codeC;
}

function getDateC() {
    return $this->dateC;
}

function getStatutC() {
    return $this->statutC;
}

function getNewAttr() {
    return $this->newAttr;
}

function getCode() {
    return $this->code;
}

function setCodeC($codeC) {
    $this->codeC = $codeC;
}

function setDateC($dateC) {
    $this->dateC = $dateC;
}

function setStatutC($statutC) {
    $this->statutC = $statutC;
}

function setNewAttr($newAttr) {
    $this->newAttr = $newAttr;
}

function setCode($code) {
    $this->code = $code;
}


}
