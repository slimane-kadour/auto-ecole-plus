<?php
//requête SQL:
  $sql = "SELECT *
            FROM resultat
	    WHERE identifiant = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 if( $result = mysql_fetch_object( $requete ) )
								  { ?>