<?php

/**
 * CnxSingleton va servir a appeler une instance de connection pour un utilisateur afin d'éviter de créer une variable global.
 *
 * @author Alexandre
 */

class CnxSingleton {
 
  /**
   * @var Singleton
   * @access private
   * @static
   */
   private static $_instance = null;
 
   /**
    * Constructeur de la classe
    *
    * @param void
    * @return void
    */
   private function __construct() {  
   }
 
   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    *
    * @param void
    * @return Singleton
    */
   public static function getInstance() {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new Singleton();  
     }
 
     return self::$_instance;
   }
}
 
?>