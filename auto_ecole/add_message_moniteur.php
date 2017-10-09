<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  extract($_POST);
	
		      $titr =   $_POST["titr"] ;                                                 
			  $message =    $_POST["message"] ;                                                       
			                                              
			                                                 
			  
						 
 
  //récupération de l'identifiant de la personne:
						$id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "select * FROM moniteurs
             WHERE idM = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if( $result = mysql_fetch_object( $requete ) )
  {
    $email= $result->email_M ;
	
  }
  
				$to = "$email";
				$subject = "$titr";
                $message="$message";
                $headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

            mail($to, $subject, $message, $headers);
		    header("location:message_envoyer_moniteur.php");
 
?>