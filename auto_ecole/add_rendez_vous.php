<?php
	//accès a la base de donée
	try
	{
	$bdd=new PDO('mysql:host=localhost;dbname=a_propos','root','');
	}
	catch(exception $e) {
		  die('erreur');
	}
		
	
	extract($_POST);
	
			$titre = htmlspecialchars(trim($titr));
			$date_rend = htmlspecialchars(trim($date_rend));
			$Heure_rend = htmlspecialchars(trim($Heure_rend));
			$rq = htmlspecialchars(trim($rq));
			
			$rq 	= addslashes ($rq) ;
			
			$query=$bdd->query("

						 INSERT INTO rendezvous VALUES('','$titre','$date_rend','$Heure_rend','$rq')
			"); 
			
			
			header("location:rendez_vous_ajouter.php");
		
?>