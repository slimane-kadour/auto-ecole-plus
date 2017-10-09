<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $titr     = $_POST["titr"] ;
						  $date_rend  = $_POST["date_rend"] ;
						  $Heure_rend = $_POST["Heure_rend"] ;
						  $rq  = $_POST["rq"] ;
						 
                           $rq	= addslashes ( $rq) ;
  //récupération de l'identifiant de la personne:
						$id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE rendezvous
            SET 
				    titre_R         = '$titr', 
				    Date_R     = '$date_rend',
					Heure_R    = '$Heure_rend',
				    Remarque     = '$rq'
					
					   WHERE idR = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
     header('location:rendez_vous_modifier.php'); 
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
