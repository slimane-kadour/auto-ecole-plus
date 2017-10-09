<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $dateE     = $_POST["date_E"] ;
						  $dateL     = $_POST["date_L"] ;
						  $dateE2     = $_POST["date_E2"] ;
						  $dateL2     = $_POST["date_L2"] ;
						  $HeureE  = $_POST["Heure_E"] ;
						  $lieuE = $_POST["lieu"] ;
						  
						  $lieuE 	= addslashes ($lieuE ) ;
						 $id  = $_POST["id"] ;

$sql = "SELECT Nom_Permis
            FROM permis
	    WHERE idP = ".$id ;		
		
 $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  if( $result = mysql_fetch_object( $requete ) )
  {
       $nom_permis = $result->Nom_Permis ;        
  }
 
  //création de la requête SQL:
 $sql = "UPDATE examens
            SET 
				    date_premier_E = '$dateE',
				    Date_limit_insc = '$dateL',
				    date_deuxieme_E = '$dateE2 ',
				    date_limit_inscr2 = '$dateL2',
				    heureE = '$HeureE',
				    lieuE = '$lieuE',
				    nom_permis = '$nom_permis'
					   WHERE nom_permis = '$nom_permis' " ;
					    //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
                   header("location:examen_ajouter.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>