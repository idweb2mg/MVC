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
/*
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
*/
    $controller = 'Application\Controllers\\' . $params['controller'] . 'Controller' ; // ici c'est newsControlleur
    $action     = $params['action'] ;  // ici c'est business

    if(file_exists(RACINE_SITE . '\\' . $controller. '.php')){
        // Excution de mon action
        $obj = new $controller ;


        // -- Si la méthode existe dans mon controller alors je peux exécuter mon action.
        if (method_exists($obj, $action)) {
              // Execution de mon action
              $obj->$action();
        }
        else
        {
           // -- Sinon la méthode n'existe pas, donc je renvoie une erreur 404.
           //echo '<h1>404 : Action introuvable</h1>' ;
           include_once VIEW_SITE . '/errors/404.php ' ;

        } // FIN if (method_exists($obj, $action))
    }
    else
    {
        //echo '<h1>404 : Controleur introuvable</h1>' ;
        include_once VIEW_SITE . '/errors/404.php ' ;

    } // FIN if(file_exists(RACINE_SITE . '\\' . $controller. '.php'))

  } // FIN public function __construct($params)

} // FIN class frontController
