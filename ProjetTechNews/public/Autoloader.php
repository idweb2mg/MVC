<?php

class Autoloader {

      public static function registrer() {
          spl_autoload_register(array(__CLASS__, 'autoload')) ;
      }

      public static function autoload($class) {
          //print_r($class) ;
          require RACINE_SITE.'/'.$class . '.php' ; // Le nom de la classe c'ext le nom du fichier.php correspondant

      } // FIN public static function autoload($class)


} // FIN class Autoloader
