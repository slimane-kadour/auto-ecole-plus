<?php

	session_start(); 
          
	//accès a la base de donée
	try
	{
	$bdd=new PDO('mysql:host=localhost;dbname=a_propos','root','');
	}
	catch(exception $e) {
		  die('erreur');
	}
		
	//générer un mot de passe aléatoir
	function password()
   {
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		$str = '';
		for ($i = 0; $i < 8; $i++)
		{
			$str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}

		return $str;
   }
   //Générer un numéro d'inscription
   function inscrit()
   {
		$pool = '0123456789';

		$str2 = '';
		for ($i = 0; $i < 8; $i++)
		{
			$str2 .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}

		return $str2;
   }
	$num = inscrit();
	extract($_POST);
	
		
			$nom = htmlspecialchars(trim($nom));
			$prenom = htmlspecialchars(trim($prenom));
			 $dat = htmlspecialchars(trim($dat));
			$adresse = htmlspecialchars(trim($adresse));
			$email = htmlspecialchars(trim($email));
			$tele = htmlspecialchars(trim($tele));
			$cni = htmlspecialchars(trim($cni));
			$permis = htmlspecialchars(trim($permis));
			$date3 = htmlspecialchars(trim($date3));
			$prix_total = htmlspecialchars(trim($total));
			$versement = htmlspecialchars(trim($versement));
			$h = htmlspecialchars(trim($_FILES['foto']['name']));
 			
 			
			$_SESSION['$nom']=$nom;
          $_SESSION['$prenom']=$prenom;
          $_SESSION['$num']=$num;
		   $_SESSION['$dat']=$dat ;
			$_SESSION['$adresse']=$adresse ;
			$_SESSION['$permis']=$permis ;
			$_SESSION['$cni']=$cni;
			$_SESSION['$tele']=$tele;
			$_SESSION['$date3']=$date3;
			
			// générer un mot de passe
			$pass = password();
			
			
			// $to = "$email";
			// $subject = "mot de passe de votre profil d auto école plus ";
			// $message="$pass";
			// $headers  = 'MIME-Version: 1.0' . "\r\n";
			// $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			// mail($to, $subject, $message, $headers);
			
			
			if (isset($_FILES['foto']) AND $_FILES['foto']['error'] == 0)
			{
			// Testons si le fichier n'est pas trop gros
				if ($_FILES['foto']['size'] <= 2000000)
				{
				// Testons si l'extension est autorisée
				$infosfichier =
				pathinfo($_FILES['foto']['name']);
				$extension_upload = $infosfichier['extension'];
				$extensions_autorisees = array('jpg', 'jpeg', 'gif',
				'png');
				if (in_array($extension_upload,
				$extensions_autorisees))
					{
						// On peut valider le fichier et le stocker définitivement
						move_uploaded_file($_FILES['foto']['tmp_name'], 'images/' .
						basename($_FILES['foto']['name']));
						$h=$_FILES['foto']['name'];
					}
				}
				$_SESSION['$h']=$_FILES['foto']['name'];
				$query=$bdd->query("

						 INSERT INTO candidats VALUES('','$nom','$prenom','$adresse','$dat','$tele',NOW(),'$num','$permis','theorique','$cni','$date3','$email','$versement',NOW(),'$prix_total','$pass','0','','$h')
			"); 
			}else 
			{
			 
			 $_SESSION['$h'] = 'icone_personnage.png' ;
			 $query=$bdd->query("

						 INSERT INTO candidats VALUES('','$nom','$prenom','$adresse','$dat','$tele',NOW(),'$num','$permis','theorique','$cni','$date3','$email','$versement',NOW(),'$prix_total','$pass','0','','icone_personnage.png')
			"); 
			}
		
			
			
			header("location:candidat_ajouter.php");
		
?>



