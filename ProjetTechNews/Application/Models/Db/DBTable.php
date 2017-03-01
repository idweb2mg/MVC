<?php
/*
=============================================
DBTable.php
=============================================
*/
namespace Application\Models\Db ;
use PDO ;

// Table abstraite : on ne peut l'instancier directement, il faut l'hériter
abstract class DBTable{

      // -- Nom de la Table
      protected $_table ;

      // -- Clé primaire
      protected $_primary ;

      // -- Class To Map
      protected $_classToMap ;

      // -- Objet PDO, BDD
      private $_db ;


      public function __construct(){
            $this->_db = DBFactory::PDOFactory() ;

      } // FIN public function __construct()

      /*
      Fonction qui sera chargée de récupérer toutes les informations d'une table dans la BDD
      */
      public function fetchAll(){

          $sql = "SELECT * FROM " . $this->_table ;
          $sth = $this->_db->prepare($sql) ;
          $sth = execute() ;
          return  $sth=fetchAll(\PDO::FETCH_CLASS, $this->_classToMap) ;
      } // FIN public function fetchAll()

} // FIN abstract class DBTable
