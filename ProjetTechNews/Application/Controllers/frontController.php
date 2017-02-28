<?php

namespace Application\Controllers ;
// Appel des espaces de nom : c'est le chemin ou se trouve le fichier correspondant sinon il ne le trouve params


class frontController {

  public function __construct($params) {
      print_r($params) ;

      if(empty($params)){
        $params['controller'] = 'news' ;
        $params['action'] = 'index' ;

    } // FIN public function __construct($params)


    // -- Récupération des paramètres
    $controller = $params['controller'] ;
    $action     = $params['action'] ;

    if($controller == 'news' AND $action == 'business' ){
        echo 'Je suis dans BUSINESS NEW' ;
    }

    if($controller == 'news' AND $action == 'computing' ){
        echo 'Je suis dans COMPUTING NEW' ;
    }

    if($controller == 'news' AND $action == 'tech' ){
    echo 'Je suis dans TECH NEW' ;
    }


  } // FIN public function __construct($params)

} // FIN class frontController
