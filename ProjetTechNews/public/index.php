<?php
/*
=======================
 index.php
-  Nous sommes ici sur le point d'entrée de notre application.
-  En MVC, c'est ce que'on appelle un Controleur Frontal.
-   L'ensemble des actions de notre site internet passera  uniquement par ce fichier (Controlleur)
-   Il a pour mission de transférer au bon controleur la demande de l'utilisateur.
   ---
-   Dans un Framework et en MVC, nopus utilisons la puissance de la réécriture des URLs via  la création d'un fichier .htaccess
=======================
*/

use Application\Controllers\frontController ; // appel de la classe frontController

// Initialisation du Site
require 'bootstrap.php' ;

/*
On enlève l'include suivant
____________________________________
include 'frontController.php' ;
____________________________________
puisque l'include est fait par l'Autoloader et il va chercher lui-même le bon fichier à inclure

*/

require HEADER_SITE ;

//echo RACINE_SITE ;

// Appel frontController
$frontController = new frontController($_GET) ;



require FOOTER_SITE ;
