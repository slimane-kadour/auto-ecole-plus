<?php   
      session_start();
        if(isset($_SESSION['admin'])){
?>
								  <?php
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysql_select_db( "a_propos" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "SELECT *
            FROM voiture
	    WHERE idV = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Accueil</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<style>
section#espPerso3 {
	background-color: #6398BB;
	float: right;
	margin-right: 20PX;
	margin-bottom: -545px;
	width: 220px;
	margin-top: 148px;
	height: 340px;
	border: 1px solid #BDB6B6;
}
#espPerso3 a {
text-decoration:none;
color:black;
}
section#espPerso3 h3 {
background-color: #ABC9EB;
}
#espPerso3 a:hover {
text-decoration:underline;
}
article h2 {
	font-size: xx-large;
	line-height: 1.2em;
	font-weight: normal;
	color: rgb(24, 41, 94);
	margin-bottom: 3px;
	margin-left: 263px;
	width: 531px;
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
.ajouter a {
text-decoration: none;
background: #5BB7E6;
border-radius: 2px;
padding: 11px 3px;
color: #fff;
border: none;
box-shadow: 0 0 3px rgba(0,0,0, 0.3);
margin: 18px 247px 2px;
display: block;
text-transform: uppercase;
font-size: 12px;
width: 137px;
text-align: center;
margin-top: -40px;
}
</style>
</head>
         
                
<body>
                  
					    
  
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
			<?php 
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM voiture ORDER BY idV ');
		 
					?>
			        <section id="espPerso3" class="bloc">
                        
			            <h3>Liste des Voitures </h3>
	                   <h4> Modèle <span class="droit">Type</span> </h4> </br>
					   <?php   while ($donnees = $reponse->fetch()){?>
					   <a href="modifier_voiture.php?idPersonne=<?php echo $donnees['idV'];?>"><?php echo $donnees['modele']."<span class='droit'>".$donnees['type_voiture']."</span>" ; ?></br></a>
						
						<?php } ?>
					</section>
				<div class="wrapper2">
				
				  <!-- Menu Direction  -->
		              <?php include("include/menu_direction.php"); ?>
					   <!-- Partie Recherche -->
					<form action="recherche_voiture.php" method="post" class="formulaire2">
                                <input type="text" name="search" placeholder="Chercher un candidat" class="champ"/>
                                <input type="submit"   class="butt"  value="Ok" />
                    </form>
							</br> </br> </br>
					 
                    <section id="content">
		                    
						 <article>
						     <h2 align="center"> Modifier ou Supprimer Cette Voiture </h2>  </br>
						    <div class="ajouter">
							
							<form action="modifier_voiture1.php" method="POST">
							
							            <input type="hidden" name="id" value="<?php echo($id) ;?>">
 
                                        <label for="typeV">Type de voiture : </label>
										<input id="typeV" type="text" name="typeV" value="<?php echo($result->type_voiture) ;?>">
 
                                        <label for="modele">Modèle: </label>
                                        <input id="modele" type="text" name="modele" value="<?php echo($result->modele) ;?>">
										
										<label for="matricule">Immatriculation  : </label>
                                        <input id="matricule" type="text" name="matricule" value="<?php echo($result->matriculation) ;?>">
										
									
										
										<label for="etat">Etat : </label>
                                        <input id="etat" type="text" name="etat" value="<?php echo($result->etat) ;?>">
										
										<img src="images/Vehicules-Voiture-61102.jpg" width="500" height="350" align="left"/>
										<input type="submit" value="Modifier" name="submit"/>
										<a href="supprimer_voiture.php?idPersonne=<?php echo($id) ;?>" onClick="return confirm('Voulez vous vraiment supprimer Cette voiture?');">Supprimer</a>
                                    </form>
									
									</br> </br>
							
							<?php
  }//fin if 
  ?>
									</br> </br>
									
</div> 
			
     
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
