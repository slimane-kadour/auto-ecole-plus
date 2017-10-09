<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $lecon     = $_POST["lecon"] ;
						  $date2  = $_POST["date2"] ;
						  $nom = $_POST["nom"] ;
						  $presence = $_POST["presence"] ;
						  
						  $id  = $_POST["id"] ;
						 
 
  //création de la requête SQL:
  $sql = "INSERT INTO presence VALUES ('','$id','$lecon','$presence','$nom','$date2')" ;
                                                                                        
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
                   header("location:presence3.php?idPersonne=$id");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>