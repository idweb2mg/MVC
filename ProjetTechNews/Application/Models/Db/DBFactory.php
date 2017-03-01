<?php
/*
=============================================
DBFactory.php
=============================================
*/
namespace Application\Models\Db ;
use PDO ;

// Table abstraite : on ne peut l'instancier directement, il faut l'hériter
class DBFactory{

    public static function {

      // -- Création d'une connexion PDO
      $pdo = new PDO('mysql:host=' . DBHOST . '; dbname=' . DBNAME, DBUSERNAME, DBPASSWORD') ;

          // http://php.net/manual/fr/pdo.error-handling.php
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION) ;


    }

} // FIN abstract class DBFactory
