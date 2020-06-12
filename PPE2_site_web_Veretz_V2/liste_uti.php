<!DOCTYPE html> 
   <head> 
      <title>Lire la table personne</title> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
   </head> 
<body> 
<?php
session_start();
	
		
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'bibliotheque_ppe';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
		   
		$resultat = mysqli_query($db, 'SELECT nomCompte,prenomCompte,identifiantCompte,mdpCompte  FROM Compte'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      //fetch sur chaque ligne ramenée par la requête 
      while ($ligne = mysqli_fetch_assoc($resultat)) { 
         // Affichage du nom et prénom des personnes 
         echo "Je suis ".$ligne['nomCompte']." ".$ligne['prenomCompte']." nomuti : ".$ligne['identifiantCompte']." mdp : ".ligne['mdpCompte']."<br />"; 
      } 
   } 
?>