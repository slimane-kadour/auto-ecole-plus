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
   
	extract($_POST);
	
			$nom = htmlspecialchars(trim($nom));
			$prenom = htmlspecialchars(trim($prenom));
			$adresse = htmlspecialchars(trim($adresse));
			$dat = htmlspecialchars(trim($dat));
			$email = htmlspecialchars(trim($email));
			$tele = htmlspecialchars(trim($tele));
			$num_cni = htmlspecialchars(trim($cni));
			$num_dipl = htmlspecialchars(trim($dipl));
			$permis = htmlspecialchars(trim($permis));
			$jour_travail = htmlspecialchars(trim($jour_travail));
			$heure_travail = htmlspecialchars(trim($heure_travail));
			$jour_travail2 = htmlspecialchars(trim($jour_travail2));
			$heure_travail2 = htmlspecialchars(trim($heure_travail2));
			$h = htmlspecialchars(trim($_FILES['foto']['name']));
			
			
		    $_SESSION['$nom']=$nom;
		    $_SESSION['$prenom']=$prenom;
		    $_SESSION['$adresse']=$adresse ;
			$_SESSION['$dat']=$dat ;
			$_SESSION['$tele']=$tele;
			$_SESSION['$cni']=$num_cni;
			$_SESSION['$num_dipl']=$num_dipl;
			$_SESSION['$permis']=$permis ;	   
			
			
			
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
				$_SESSION['$h'] = $_FILES['foto']['name'];
			 $req = $bdd->prepare('INSERT INTO moniteurs(nom_M, prenom_M, adresse_M, date_naiss_M, num_diplome, type_permis,num_CNI,email_M,numero_telph,
			 date_inscription,password,admin,foto) VALUES(:nom, :prenom, :adresse, :dat, :num_dipl, :permis, :num_cni, :email, :tele,
			 NOW(), :pass, :admin, :foto)'); $req->execute(array( 'nom' => $nom, 'prenom' => $prenom, 'adresse' => $adresse, 'dat' => $dat, 'num_dipl' => $num_dipl, 'permis' => $permis, 'num_cni' => $num_cni, 'email' => $email, 'tele' => $tele, 'pass' => $pass, 'admin' => 1, 'foto' => $h ));
			 
			$UID = $bdd -> lastInsertId();  
			}else 
			{
			 $hh =   'icone_personnage.png' ;
			 $_SESSION['$h'] = 'icone_personnage.png' ;
			 $req = $bdd->prepare('INSERT INTO moniteurs(nom_M, prenom_M, adresse_M, date_naiss_M, num_diplome, type_permis,num_CNI,email_M,numero_telph,
			 date_inscription,password,admin,foto) VALUES(:nom, :prenom, :adresse, :dat, :num_dipl, :permis, :num_cni, :email, :tele,
			 NOW(), :pass, :admin, :foto)'); $req->execute(array( 'nom' => $nom, 'prenom' => $prenom, 'adresse' => $adresse, 'dat' => $dat, 'num_dipl' => $num_dipl, 'permis' => $permis, 'num_cni' => $num_cni, 'email' => $email, 'tele' => $tele, 'pass' => $pass, 'admin' => 1, 'foto' => $hh));

			 
			$UID = $bdd -> lastInsertId(); 
			}
			
			
			$query2=$bdd->query("

						 INSERT INTO lecon VALUES('','$jour_travail','$heure_travail','$UID')
			"); 
			
            $query3=$bdd->query("

						 INSERT INTO lecon VALUES('','$jour_travail2','$heure_travail2','$UID')
			"); 			
			
			
			
			
			header("location:moniteur_ajouter.php");
		
?>