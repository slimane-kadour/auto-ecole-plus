<?php   
      session_start();
        if(isset($_SESSION['admin'])){
		//connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysql_select_db( "a_propos" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "SELECT *
            FROM rendezvous
	    WHERE idR = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
  
  
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
margin-top: 83px;
height: 340px;
border: 1px solid #BDB6B6;
}
#espPerso3 a {
 text-decoration:none;
 color:black;
}
#espPerso3 a:hover {
 text-decoration:underline;
}
section#espPerso3 h3 {
background-color: #ABC9EB;
}
.nouveau {
margin-left: 246px;
margin-top: -56px;
}
article h2 {
	font-size: xx-large;
	line-height: 1.2em;
	font-weight: normal;
	color: rgb(24, 41, 94);
	margin-bottom: 3px;
	margin-left: 217px;
	width: 567px;
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
$reponse = $bdd->query('SELECT * FROM rendezvous ORDER BY idR DESC LIMIT 0,20 ');
		 
					?>
			<section id="espPerso3" class="bloc">
                        
			            <h3>Rendez Vous d'aujourd'hui</h3>
	                    <div class="droite">
						<h4>Date rendez vous<span class="droit">Heure</span> </h4> </br>
						 <?php   while ($donnees = $reponse->fetch()){?>
						<a href="rendez_vous1.php?idPersonne=<?php echo $donnees['idR'];?>"><p><?php echo $donnees['Date_R'] ; ; ?><span class="droit"><?php echo $donnees['Heure_R'] ; ; ?></span></p></a> 
						<?php } ?>
						
					</section>
			    <div class="wrapper2">
				
				<!-- Menu Direction et partie recherche -->
		              <?php include("include/menu_direction.php"); ?>
			
<section id="content">
		                    
						 <article>
						    <h2 align="center"> Modifier ou Supprimer Un Rendez Vous  </h2>  </br>
						    <div class="ajouter">
								   					
                           
								<?php	//affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {   ?>
									
			                        <form action="modifer_rendez_vous.php" method="POST">
			
			                            <input type="hidden" name="id" value="<?php echo($id) ;?>">
			                            
                                        <label for="titr">Titre : </label>
										<input id="titr" type="text" name="titr" value="<?php echo($result->titre_R) ;?>">
										
										<label for="date_rend">Date du Rendez vous : </label>
										<input id="date_rend" type="date" name="date_rend"  value="<?php echo($result->Date_R) ;?>">
										
										<label for="Heure_rend">Heure du Rendez vous : </label>
										<input id="Heure_rend" type="time" name="Heure_rend" value="<?php echo($result->Heure_R) ;?>">
										
										<label for="rq">Remarque: </label>
										<input id="rq" type="text" name="rq"  value="<?php echo($result->Remarque) ;?>">
										</br> </br>
										
			
                                        <input type="submit" value="modifier" name="submit"/>
										<div class="nouveau"><a href="supprimer_rendez_vous.php?idPersonne=<?php echo ($id);?>" onClick="return confirm('Voulez vous vraiment supprimer ce rendez vous?');">Supprimer</a></div>
									</form>
																		 <?php
  }//fin if 
  ?>
									</br> </br></br></br></br></br></br></br></br></br></br></br>
									</div>
		                         
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