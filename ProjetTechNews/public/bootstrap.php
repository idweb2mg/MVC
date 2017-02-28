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



require_once 'Autoloader.php' ;

Autoloader::registrer() ;
