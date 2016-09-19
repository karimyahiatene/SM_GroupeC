<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Cette classe permet de se connecter à la base de donnée de speedy market et elle hérite de PDO
 *
 * @author alexa
 */
class Cnx extends PDO {
    
    private $engine; 
    private $host; 
    private $database; 
    private $user; 
    private $pass; 
    
    public function __construct(){ 
        $this->engine = 'mysql'; 
        $this->host = 'localhost'; 
        $this->database = 'db_speedymarket'; 
        $this->user = 'root'; 
        $this->pass = ''; 
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host; 
        parent::__construct( $dns, $this->user, $this->pass ); 
    }
}

?>