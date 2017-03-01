<?php
/*
====================================================
newsController.php
====================================================
*/
namespace Application\Controllers ;

class newsController extends \Application\Controllers\appController {

    public function index (){

      //echo '<h1>JE SUIS LA PAGE BUSINESS</h1>' ;
    //  include_once VIEW_SITE . '/news/index.php' ;
    // Transféré dans appController.php !!!!
    // et remplacé par l'appel suivant :

    $this->render('news/index') ;

    } // FIN public function business

    public function business (){ 

      echo '<h1>JE SUIS LA PAGE BUSINESS</h1>' ;

    } // FIN public function business
} // FIN class newsController
