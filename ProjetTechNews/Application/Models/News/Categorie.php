<?php
/*
=============================================
Categorie.php
=============================================
*/
namespace Application\Models\Db ;
use PDO ;


class Catgeorie {

    private
            $IDCATEGORIE
            ,$LIBELLECATEGORIE
            ,$ROUTECATEGORIE
            ;

    public function getIDCATEGORIE(){
        return $this->IDCATEGORIE ;
    } // FIN public function getIDCATEGORIE()

    public function getLIBELLECATEGORIE(){
        return $this->LIBELLECATEGORIE ;
    } // FIN public function getLIBELLECATEGORIE()

    public function getROUTECATEGORIE(){
        return $this->ROUTECATEGORIE ;
    } // FIN public function getROUTECATEGORIE(

} // FIN class Catgeorie
