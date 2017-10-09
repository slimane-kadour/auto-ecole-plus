<?php   
      session_start();
        if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Accueil</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
 
</head>
										
<body>
<style>
                    table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin-left: 0px;
	border:#ccc 1px solid;
	-webkit-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
</style>
  
    <div class="main-box" id="ancre">
                    <section id="espPerso" class="bloc">
                        <?php if (!isset($_SESSION['connect'])){?>
			            <?php } else{  echo  "<h3>Bonjour  ".$_SESSION['pseudo']."</h3>"; ?>
	                    <a href="deconnexion.php">Déconnexion</a>
				        <?php }?>
					</section>
					
        <div class="container3">
	        <div class="inside">
	  	        <div class="wrapper2">
                          
		            <!-- Menu Direction et partie recherche -->
		              <?php include("include/menu_direction.php"); ?>
                    <section id="content">
		                    
                        <article>
			               
			<?php 
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}

                        $searchq = $_POST['search'];
						$reponse = $bdd->query('SELECT identifiant,nom , prenom , num_telephone , email , type_permis FROM candidats  WHERE nom LIKE '%$searchq%' OR prenom LIKE '%$searchq%' ORDER BY identifiant DESC LIMIT 0,20 ');
			?>
			    <table cellspacing='0' > 
	                <tr>
					    <th>Nom</th>
						<th>Prenom</th>
						<th>N°téléphone</th>
						<th>Email</th>
						<th>Type_de_permis</th>
						<th>Supprimer</th>
						<th>Modiffier</th>
						<th>Envoyer Message</th>
					</tr>
					<?php while ($donnees = $reponse->fetch()){
					?>
                    <tr class='even'>
					    <td><?php echo $donnees['nom']; ?></td>
						<td><?php echo $donnees['prenom']; ?></td>
						<td><?php echo $donnees['num_telephone']; ?></td>
						<td><?php echo $donnees['email']; ?></td>
						<td><?php echo $donnees['type_permis'];   ?></td>
						<td><a href="suppression1.php?idPersonne=<?php echo $donnees['identifiant'];?>"><img src="images/corbeille.png"/></a></td>
						<td><a href="modifier_candidat1.php?idPersonne=<?php echo $donnees['identifiant'];?>"><img src="images/url.jpg"/></a></td>
						<td><a href="envoyer_message_candidat.php?idPersonne=<?php echo $donnees['identifiant'];?>"><img src="images/mail.jpg"/></a></td>
					</tr>
					<?php } $reponse->closeCursor(); ?>
				</table>
				
	                    </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
       
           
        
        <?php    }    else    {      header("location:accueil.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
 
</body>
</html>