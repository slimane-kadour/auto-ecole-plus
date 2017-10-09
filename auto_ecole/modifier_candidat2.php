<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $nom     = $_POST["nom"] ;
						  $prenom  = $_POST["prenom"] ;
						  $adresse = $_POST["adresse"] ;
						  $date_naiss  = $_POST["dat"] ;
						  $num_telph    = $_POST["tele"] ;
						  $date_inscr    = $_POST["date2"] ;
						  $num_inscr    = $_POST["num_inscr"] ;
						  $type_permis    = $_POST["permis"] ;
						  $num_cni    = $_POST["cni"] ;
						  $debut_cours    = $_POST["dat3"] ;
						 $email   = $_POST["email"] ;
						  $versement    = $_POST["versement"] ;
 
  //récupération de l'identifiant de la personne:
						$id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE candidats
            SET 
				    nom         = '$nom', 
				    prenom     = '$prenom',
					adresse    = '$adresse',
				    date_naiss     = '$date_naiss',
					num_telephone  = '$num_telph',
					date_inscription  = '$date_inscr',
					num_inscription =   '$num_inscr',
					type_permis  = '$type_permis',
					num_CNI  = '$num_cni',
					date_debut_cours  = '$debut_cours',
					email          = '$email',
					versement = '$versement'
					   WHERE identifiant = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
     header('location:modification_effectuer2.php'); 
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>



