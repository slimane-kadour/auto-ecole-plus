
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
   <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
 
</head>
										
<body>
<style>
 table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin-left: 31px;
	border:#ccc 1px solid;
	-webkit-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
.couleur {
	color: green;
	font-size: x-large;
	margin-left: 229px;
	width: 505px;
	text-align: center;
}
#content {
	float: left;
	width: 572px;
	margin-bottom: 358px;
}
section#espPerso2 {
	background-color: #6398BB;
}
section#espPerso2 h3 {
	background-color: #ABC9EB;
}
section#espPerso2 .submitOk {
	background-color: #97A0B4;
	border: 3px solid #7F8991;
}
.inside {
	margin-left: -64px;
	background: #EBEBEB;
}
.main-box {
	background-image:url("images/blue.jpg");
}
</style>
  
    <div class="main-box" id="ancre">
                   <section id="espPerso2" class="bloc">
                        <?php if (!isset($_SESSION['connect'])){?>
			            <?php } else{  echo  "<h3><a href='index.php'>".$_SESSION['pseudo']."</a></h3>"; ?>
	                    <h3><a href="deconnexion.php">Déconnexion</a></h3>
					    <h3><a href="#?w=500" rel="popup_name2" class="poplight">Changer le mot de passe ?</a></h3>
				        <?php }?>
					</section>
					
					
        <div class="container">
	        <div class="inside">
	  	        <div class="wrapper2">
                           <!-- Menu Direction  -->
		              <?php include("include/menu_direction.php"); ?>
					   <!-- Partie Recherche -->
					<form action="recherche.php" method="post" class="formulaire2">
                                <input type="text" name="search" placeholder="Chercher un candidat" class="champ"/>
                                <input type="submit"   class="butt"  value="Ok" />
                    </form>
							</br> </br> </br>
                    <section id="content">
		                    
                        <article>

<?php

mysql_connect("localhost","root","")  or die ("impossible de ce connecter");

mysql_select_db("a_propos") or die("cette base de donne n existe pas");

    
  $output='';
  

   
     $searchq = $_POST['search'];
	 
  

   $query=mysql_query("SELECT * FROM candidats WHERE nom LIKE '%$searchq%' OR prenom LIKE '%$searchq%'") or die ("could not search!");   
   
   $count = mysql_num_rows($query);
     if($count == 0){ ?>
	 
              <p class="couleur">Aucun Résultat trouvé</p> </br>
			  <?php 
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT identifiant,nom , prenom , num_telephone , email , type_permis, adresse  FROM candidats ORDER BY identifiant DESC LIMIT 0,20 ');
			?>
			    <table cellspacing='0' > 
	                <tr>
					    <th>Nom</th>
						<th>Prenom</th>
						<th>N°téléphone</th>
						<th>Adresse</th>
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
						<td><?php echo $donnees['adresse']; ?></td>
						<td><?php echo $donnees['type_permis'];   ?></td>
						<td><a href="suppression1.php?idPersonne=<?php echo $donnees['identifiant'];?>" onClick="return confirm('Voulez vous vraiment supprimer ce candidat?');"><img src="images/corbeille.png"/></a></td>
						<td><a href="modifier_candidat1.php?idPersonne=<?php echo $donnees['identifiant'];?>"><img src="images/url.jpg"/></a></td>
						<td><a href="envoyer_message_candidat.php?idPersonne=<?php echo $donnees['identifiant'];?>"><img src="images/mail.jpg"/></a></td>
					</tr>
					<?php } $reponse->closeCursor(); ?>
				</table>
			  
         	  
                   
                <?php    }else{
				   ?>
											 <table cellspacing='0' > 
				     
					 <tr>
					    <th>Nom</th>
						<th>Prenom</th>
						<th>N°téléphone</th>
						<th>Adresse</th>
						<th>Type_de_permis</th>
						<th>Supprimer</th>
						<th>Modiffier</th>
						<th>Envoyer Message</th>
					</tr>
				        <?php
                 while($rows = mysql_fetch_array($query)){
				                             $fname=$rows['nom'];
											  $lname=$rows['prenom'];
											  $id=$rows['identifiant'];
											  $numt=$rows['num_telephone'];
											   $email=$rows['adresse'];
											   $type_permis=$rows['type_permis'];
											   $id=$rows['identifiant'];
											  
											 
											 
											  
											?>
											
	              
					
                    <tr class='even'>
					    <td><?php echo $fname; ?></td>
						<td><?php echo $lname; ?></td>
						<td><?php echo    $numt; ?></td>
						<td><?php echo $email; ?></td>
						<td><?php echo $type_permis; ?></td>
						<td><a href="suppression1.php?idPersonne=<?php echo $id ;?>" onClick="return confirm('Voulez vous vraiment supprimer ce candidat?');"><img src="images/corbeille.png"/></a></td>
						<td><a href="modifier_candidat1.php?idPersonne=<?php echo $id ;?>"><img src="images/url.jpg"/></a></td>
						<td><a href="envoyer_message_candidat.php?idPersonne=<?php echo $id ;?>"><img src="images/mail.jpg"/></a></td>
					</tr>
				 <?php	}
                            }
							
					
				?>
				
				
				</table>
                                       
 </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
       
										
							       <?php    }    else    {      header("location:index.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
 <div id="popup_name2" class="popup_block">
			 <form  method="post" action="update.php">
							    <p><label for="nom"> Votre Nom :</label><br/>
							    <input type="text" name="nom"  id="nom"  required="required"/></p>
						        <p><label for="o_password"> Ancien mot de passe :</label><br/>
							    <input type="password" name="o_password"  id="o_password"  required="required"/></p>
						        <p><label for="n_password">Nouveau mot de passe :</label><br/>
						        <input type="password" name="n_password"  id="n_password" required="required"/></p>
								<p><label for="r_password">Répeter nouveau mot de passe :</label><br/>
						        <input type="password" name="r_password"  id="r_password" required="required"/></p>
						        <input type="submit" value="Valider" name="submit" class="submitOk" />
                            </form>
            </div>
			<script type="text/javascript">
    $(document).ready(function() {
	//Lorsque vous cliquez sur un lien de la classe poplight et que le href commence par #
$('a.poplight[href^=#]').click(function() {
	var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
	var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

	//Récupérer les variables depuis le lien
	var query= popURL.split('?');
	var dim= query[1].split('&amp;');
	var popWidth = dim[0].split('=')[1]; //La première valeur du lien

	//Faire apparaitre la pop-up et ajouter le bouton de fermeture
	$('#' + popID).fadeIn().css({
		'width': Number(popWidth)
	})
	.prepend('<a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Fermer" alt="Fermer" /></a>');

	//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
	var popMargTop = ($('#' + popID).height() + 80) / 2;
	var popMargLeft = ($('#' + popID).width() + 80) / 2;

	//On affecte le margin
	$('#' + popID).css({
		'margin-top' : -popMargTop,
		'margin-left' : -popMargLeft
	});

	//Effet fade-in du fond opaque
	$('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
	//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
	$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

	return false;
});

//Fermeture de la pop-up et du fond
$('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
	$('#fade , .popup_block').fadeOut(function() {
		$('#fade, a.close').remove();  //...ils disparaissent ensemble
	});
	return false;
});
});
    </script>
 
</body>
</html>