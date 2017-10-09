<html>
  <head>
    <title>suppression de données en PHP :: partie 1</title>
   
  </head>
<body>
  <?php
    //connection au serveur:
    $cnx = mysql_connect( "localhost", "root", "" ) ;
 
    //sélection de la base de données:
    $db = mysql_select_db( "a_propos" ) ;
 
    //requête SQL:
    $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "DELETE 
            FROM moniteurs
	    WHERE idM = ".$id ;
  	    
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($requete)
  {
      header("location:moniteur_supprimer.php");
  }
  else
  {
    echo("La suppression à échouée") ;
  }
  ?>
</body>
</html>