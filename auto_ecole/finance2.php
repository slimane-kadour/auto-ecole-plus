<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "a_propos" ) ;
 
  //récupération des valeurs des champs:
  
						  $versement     = $_POST["vers"] ;
						  $date_vers  = $_POST["date_vers"] ;
						  $remarque = $_POST["rq"] ;
						  
						  $remarque	= addslashes ($remarque) ;
						  $id  = $_POST["id"] ;
						 
 $sql = "SELECT *
            FROM candidats
	    WHERE identifiant = ".$id ;
		
		//exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
           
          $nom =  $result->nom ;  
          $prenom =$result->prenom ;
          $num  = $result->num_inscription ;
		   $dat = $result->date_inscription ;
		$adresse = $result->adresse ;
			$permis = $result->type_permis ;
			$cni =$result->num_CNI ;
			$tele =$result->num_telephone ;
			$date3 =$result->date_debut_cours ;
           $versement2 =$result->versement ;
		   
		 }
		 $versement2 = $versement2 + $versement ;
		 

  //création de la requête SQL:
  $sql = "UPDATE candidats
            SET 
				    versement         = '$versement2', 
				    Date_versement    = '$date_vers',
					remarque    = '$remarque'
				    
					   WHERE identifiant = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
                   session_start(); 
          $_SESSION['$nom']=   $nom ;  
          $_SESSION['$prenom']=$prenom  ;
          $_SESSION['$num']=$num ;
		   $_SESSION['$dat']=$dat;
			$_SESSION['$adresse']=$adresse ;
			$_SESSION['$permis']=$permis ;
			$_SESSION['$cni']=$cni ;
			$_SESSION['$tele']=$tele ;
			$_SESSION['$date3']=$date3;
                   header("location:finance1.php?idPersonne=$id");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>


