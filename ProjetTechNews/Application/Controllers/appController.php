<?php

namespace Application\Controllers ;

class appController {
    private $_viewparams ;
    /*
      ----------------------------------------
      Cette vue permet de générer l'affichage de vue passée en paramètre
      @param string $view Vue à afficher
      ----------------------------------------
    */
    protected function render($view, $viewparam = ''){

        // - Récupération et Affectation des PAramètres de la Vue
        $this->_viewparams = $viewparam ;

        // Affichage de l'en-tete de page récupéré de index.php
        require HEADER_SITE ;

        include_once VIEW_SITE . '/' . $view . '.php' ; // news index

        // Affichage du pied de page récupéré de index.php
        require FOOTER_SITE ;

    } // FIN public function render($view)

    public function getParams(){
        return $this->_viewparams ;
    } // FIN public function getParams()


} // FIN class appController
