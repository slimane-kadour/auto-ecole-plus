<?php
 
 

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
                       $np  = $_POST["np"] ;
   
                          $rq     = $_POST["rq"] ;
						  $date2  = $_POST["date2"] ;
						  $nom = $_POST["nom"] ;
						  $rq	= addslashes ($rq) ;

						 while ($np > 0){
						  
						  $idd='id'.$np ;
						  $id  = $_POST[$idd] ;
						  $presencee='presence'.$np;
						  $presence = $_POST[$presencee] ;
						


						$np--;
						 
						  
						 
 
  //création de la requête SQL:
  $sql = "INSERT INTO presence VALUES ('','$id','$rq','$presence','$nom','$date2')" ;
    //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  }
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
                 header("location:candidat_marquer.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
						 

?>