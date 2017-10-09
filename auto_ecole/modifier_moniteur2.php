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
						  $num_dipl    = $_POST["dipl"] ;
						  $num_cni    = $_POST["cni"] ;
						  $email   = $_POST["email"] ;
						  $num_telph    = $_POST["tele"] ;
						  $date_inscr    = $_POST["date2"] ;
						  
 
  //récupération de l'identifiant de la personne:
						$id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE moniteurs
            SET 
				    nom_M        = '$nom', 
				    prenom_M     = '$prenom',
					adresse_M    = '$adresse',
				    date_naiss_M     = '$date_naiss',
					num_diplome  = '$num_dipl',
					num_CNI  = '$num_cni',
					email_M =   '$email',
					numero_telph  = '$num_telph',
					date_inscription  = '$date_inscr'
					
					WHERE idM = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    header('location:modification_effectuer.php'); 
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>