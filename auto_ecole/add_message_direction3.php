<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $titre_message     = $_POST["titre_messg"] ;
						  $message  = $_POST["message"] ;
						  $id  = $_POST["id"] ;
						  $email  = $_POST["email"] ;
						 
                           $message	= addslashes ($message) ;

  //création de la requête SQL:
  $sql = "INSERT INTO message_direction VALUES ('','$titre_message','$message',NOW(),NOW(),'$id','$email')" ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
                   header("location:message_envoyer_direction3.php#ancre");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
