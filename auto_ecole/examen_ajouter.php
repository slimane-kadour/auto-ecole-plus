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
<style>
section#espPerso3 {
background-color: #6398BB;
float: right;
margin-right: 20PX;
margin-bottom: -545px;
width: 220px;
margin-top: 60px;
height: 138px;
border: 1px solid #BDB6B6;
}
section#espPerso3 h3 {
background-color: #ABC9EB;
}
#espPerso3 a {
text-decoration:none;
color:black;
}
#espPerso3 a:hover {
text-decoration:underline;
}
#content {
float: left;
width: 572px;
margin-bottom: 60px;
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
.couleur {
color: green;
font-size: x-large;
text-align: center;
margin-left: 335px;
width: 344px;
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
$reponse = $bdd->query('SELECT * FROM permis');
		 
					?>
			<section id="espPerso3" class="bloc">
                      <h3>Liste des permis </h3>
					  <?php   while ($donnees = $reponse->fetch()){?>
			            
	                   						
						<a href="examen1.php?idPersonne=<?php echo $donnees['idP'];?>"><?php echo $donnees['Nom_Permis'] ; ?></br></a>
						
						<?php } ?>
					</section>
			    <div class="wrapper2">
				<!-- Menu Direction -->
		              <?php include("include/menu_direction.php"); ?>
					 
                    <section id="content">
		                    
						 <article>
						    <p class="couleur"> Examen Ajouter </p>
						    <div class="ajouter">
								  <!-- Formulaire de direction pour ajouter un candidat -->
							 
								<form action="add_examen.php" method="POST">
								
								        <label for="date_E">Date du premier examen : </label>
										<input id="date_E" type="date" name="date_E" required="required">
										
										<label for="date_L">Date Limite d'inscription : </label>
										<input id="date_L" type="date" name="date_L" required="required">
										
										<label for="date_E2">Date du deuxieme examen : </label>
										<input id="date_E2" type="date" name="date_E2" required="required">
										
										<label for="date_L2">Date Limite d'inscription : </label>
										<input id="date_L2" type="date" name="date_L2" required="required">
										
										<label for="Heure_E">Heure d'examen : </label>
										<input id="Heure_E" type="time" name="Heure_E" required="required">
 
                                        <label for="lieu">Lieu d'examen : </label>
                                        <input id="lieu" type="text" name="lieu" required="required">
										
										<label for="tarif"><strong>Tarif d'examen : </strong></label>
			                            <input id="tarif" name="tarif" type="text"  required="required" /> 
										
										<input type="submit" value="Confirmer" name="submit"/>
								</form>
						</br> </br>
									
									
</div> 
		
     </br> </br></br> </br></br> </br></br> 
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