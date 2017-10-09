<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $type_voiture    = $_POST["typeV"] ;
						  $modele  = $_POST["modele"] ;
						  $matricule = $_POST["matricule"] ;
						  $etat  = $_POST["etat"] ;
						  
 
  //récupération de l'identifiant de la personne:
						$id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE voiture
            SET 
				    type_voiture         = '$type_voiture', 
				    modele     = '$modele',
					matriculation    = '$matricule',
				    etat    = '$etat'
					
					WHERE idV = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
     header('location:voiture_modifier.php'); 
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>

