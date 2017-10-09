<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
							
							
  
						  $epreuve  = $_POST["epreuve"] ;
						  $resultat  = $_POST["resultat"] ;
						  $examen_payer = $_POST["examen_payer"] ;
						  $remarque = $_POST["rq"] ;
						  
						  $remarque	= addslashes ($remarque) ;
						  $id  = $_POST["id"] ;
						  
						  if ($epreuve == 'Code'  and $resultat == 'Réussie' ){
						  //création de la requête SQL:
  $sql = "UPDATE candidats
            SET 
				    type_lecon = 'pratique'
					   WHERE identifiant = '$id' " ;
					    //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
						  
						  

						 
 
  //création de la requête SQL:
  $sql = "INSERT INTO resultat VALUES ('','$id','$epreuve','$resultat','$examen_payer','$remarque',NOW())" ;
                                                                                        
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 } else if  ($epreuve == 'Code'  and $resultat == 'échouer' ) {
 //création de la requête SQL:
  $sql = "INSERT INTO resultat VALUES ('','$id','$epreuve','$resultat','$examen_payer','$remarque',NOW())" ;
                                                                                        
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 } else if ($epreuve == 'Circuit'  and $resultat == 'obtenue_permis' ){
   $sql = "UPDATE resultat
            SET 
				    epreuve = '$epreuve',
				    resultat_examen = '$resultat',
				    examen_payer = '$examen_payer',
				    remarque = '$remarque',
				    date_denvoie = NOW()
					   WHERE identifiant = '$id' " ;
					    //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  $sql = "UPDATE candidats
            SET 
				    type_lecon = 'permis obtenu'
					   WHERE identifiant = '$id' " ;
					    //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
						  
 
 }else {
 $sql = "UPDATE resultat
            SET 
				    epreuve = '$epreuve',
				    resultat_examen = '$resultat',
				    examen_payer = '$examen_payer',
				    remarque = '$remarque',
				    date_denvoie = NOW()
					   WHERE identifiant = '$id' " ;
					    //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 }
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
                  header("location:resultat3.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>