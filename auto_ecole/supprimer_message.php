<?php
    //connection au serveur:
    $cnx = mysql_connect( "localhost", "root", "" ) ;
 
    //sélection de la base de données:
    $db = mysql_select_db( "a_propos" ) ;
 
    //requête SQL:
    $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "DELETE 
            FROM message_direction
	    WHERE id_Message = ".$id ;
  	    
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($requete)
  {
      header("location:message_supprimer.php");
  }
  else
  {
    echo("La suppression à échouée") ;
  }
  ?>