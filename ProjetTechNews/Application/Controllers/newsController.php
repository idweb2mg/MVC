<?php


namespace Application\Controllers ;

class newsController {

    public function index (){

      //echo '<h1>JE SUIS LA PAGE BUSINESS</h1>' ;
      include_once VIEW_SITE . '/news/index.php' ;

    } // FIN public function business

    public function business (){

      echo '<h1>JE SUIS LA PAGE BUSINESS</h1>' ;

    } // FIN public function business
} // FIN class newsController
