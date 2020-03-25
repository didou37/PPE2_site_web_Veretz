<?php
 
    /*************************
    *  Page: deconnexion.php
    *  Page encodée en UTF-8
    **************************/
 
session_start();//session_start() nous permet ici d'appeler toutes les sessions actives de l'utilisateur, enregistrées avec $_SESSION['nom_que_vous_souhaitez']
 
$_SESSION = array();
session_destroy();

?>
<a href="acceuil.php">Revenir à la page d'accueil</a></p>