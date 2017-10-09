<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  extract($_POST);
	
		      $titr =   $_POST["titr"] ;                                                 
			  $message =    $_POST["message"] ;                                                       
			                       
			  
						 
 
  //récupération de l'email:
						$email = $_POST["id"] ;
 
  
                        $to = "$email";
                        $subject = "$titr";
                        $message="$message";
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

            mail($to, $subject, $message, $headers);
		    header("location:message_envoyer.php");
 
?>




