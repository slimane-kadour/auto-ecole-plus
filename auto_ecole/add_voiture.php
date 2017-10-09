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
	
			$type_v = htmlspecialchars(trim($typeV));
			$modele = htmlspecialchars(trim($modele));
			$matricule = htmlspecialchars(trim($matricule));
			$etat = htmlspecialchars(trim($etat));
			
			$query=$bdd->query("

						 INSERT INTO voiture VALUES('','$type_v','$modele','$matricule','$etat')
			"); 
			
			
			header("location:voitures_ajouter.php");
		
?>