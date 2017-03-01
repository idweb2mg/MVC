<?php

#Initialisatiion de la session
session_start() ;

# Affichage des errors en DEV
ini_set("display_errors",1) ;
# Racine du Site Internet
# Nécessite PHP 7+ !!!!!!!!!!!!!! ==> ampps
define('RACINE_SITE', dirname(__FILE__,2)) ;

# En-tete du site
define('SITE_URL', '/ProjetMVC-TechNews/ProjetTechNews/') ;

# Chemin relatif vers le dossier Public
define('PUBLIC_URL', '/ProjetMVC-TechNews/ProjetTechNews/public') ;

# En-tete du site
define('HEADER_SITE', RACINE_SITE . '/Application/Layout/header.inc.php') ;

# Pied de page du site
define('FOOTER_SITE', RACINE_SITE . '/Application/Layout/footer.inc.php') ;

# Les Vues
define('VIEW_SITE', RACINE_SITE . '/Application/Views') ;

# Connexion à la BDD DBFactory
# cf Ampps/www/ProjetMVC-TechNews/ProjetMVC/Modélisation/PDF/TechNews_UML.pdf
define('DBHOST', 'localhost') ;
define('DBNAME', 'news') ;
define('DBUSERNAME', 'root') ;
define('DBPASSWORD', '') ;

# Autoloader
require_once 'Autoloader.php' ;
Autoloader::registrer() ;


# debug
define('FIC_DEBUG', PUBLIC_URL . '/void.debug') ;

// Fonction Debug (amélioration du print_r())
function debug($arg){
    if(file_exists(FIC_DEBUG)){
    	echo '<div style="color: white; font-weight: bold; padding: 10px; background:#' . rand(111111, 999999) . '">';
    	$trace = debug_backtrace(); // debug_backtrace me retourne des infos sur l'emplacement où est EXECUTER cette fonction. Nous retourne un array multidimentionnel.
    	echo 'Le debug a été demandé dans le fichier : ' . $trace[0]['file'] . ' à la ligne : ' . $trace[0]['line'] . '<hr/>';

    	echo '<pre>';
    	print_r($arg);
    	echo '</pre>';

    	echo '</div>';
    }
}
