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
section#espPerso3 {
background-color: #6398BB;
float: right;
margin-right: 20PX;
margin-bottom: -494px;
width: 220px;
margin-top: 24px;
height: 126px;
border: 1px solid #BDB6B6;
}
section#espPerso3 h3 {
background-color: #ABC9EB;
}

#espPerso3 a{
text-decoration: none;
color: black;
}
#espPerso3 a:hover{
text-decoration:underline;
font-size:large;
color:green;
}
#espPerso3 p span {
font-weight: bolder;
color: rgb(8, 14, 73);
font-size: 17px;
}
.inside {
margin-left: -64px;
background: #EBEBEB;
}
.main-box {
background-image:url("images/blue.jpg");
}
.travail {
font-size:large;
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
			
												<section id="espPerso3" class="bloc">
													<h3>Nouveau Moniteur</h3>
													<p><span><?php echo $_SESSION['$nom']." ".$_SESSION['$prenom']; ?></span></br> à été ajouter avec succes</p>
												<a href="cible2.php"> Voir le formulaire >> </a>
												</section>
					
			    <div class="wrapper2">
				
				  <!-- Menu Direction-->
		              <?php include("include/menu_direction.php"); ?>
					 
                    <section id="content">
		                    
						 <article>
						 
						    <div class="ajouter">
								
								  
							<form action="add_moniteur.php" method="POST" enctype="multipart/form-data">
 
                                        <label for="nom">Nom : </label>
										<input id="nom" type="text" name="nom">
 
                                        <label for="prenom">Prenom : </label>
                                        <input id="prenom" type="text" name="prenom">
										
										<label for="adresse">Adresse  : </label>
                                        <input id="adresse" type="text" name="adresse">
										
										<label for="dat"><strong>Date de naissances : </strong></label>
			                            <input id="dat" name="dat" type="date"  required="required" />  
										
										<label for="email">Adresse Email : </label>
                                        <input id="email" type="email" name="email">
										
										<label for="tele">Numéro de téléphone : </label>
                                        <input id="tele" type="text" name="tele">
										
										<label for="cni">Numéro de la carte d'identité : </label>
                                        <input id="cni" type="text" name="cni">
										
										<label for="dipl">Numéro du diplome : </label>
                                        <input id="dipl" type="text" name="dipl">
										
										<label for="permis"><strong>Type de permis : </strong></label>  
                                            <select name="permis" id="permis" >
				                                <option  value="rien"> Type </option>  
				                                <option  value="permisB" id="permisB"> permis B </option>   
                                                <option  value="permisAAC" id="permisAAC" name="permisAAC"> permis AAC </option>
 					                            <option  value="permisE(B)"> permis E(B) </option> 
					                            <option  value="handiconduite"> handi'conduite </option> 
					                    </select>
										
										 <label><strong><span class="travail">Jours de travail </span> </strong></label> </br>
									    <label for="jour_travail"><strong>La première séance : </strong></label> 
											<select name="jour_travail" id="jour_travail">
				                                <option  value="rien"> Jours </option>  
				                                <option  value="Dimanche" id="Dimanche"> Dimanche </option>   
                                                <option  value="Lundi" id="Lundi" name="Lundi"> Lundi </option>
 					                            <option  value="Merdi"> Merdi </option> 
					                            <option  value="Mercredi"> Mercredi </option> 
					                            <option  value="Jeudi"> Jeudi </option> 
					                        </select>
									   <input id="heure_travail" name="heure_travail" type="time"  />
									   
									   <label for="jour_travail2"><strong>La Deuxième séance : </strong></label> 
											<select name="jour_travail2" id="jour_travail2" >
				                                <option  value="rien"> Jours </option>  
				                                <option  value="Dimanche" id="Dimanche"> Dimanche </option>   
                                                <option  value="Lundi" id="Lundi" name="Lundi"> Lundi </option>
 					                            <option  value="Merdi"> Merdi </option> 
					                            <option  value="Mercredi"> Mercredi </option> 
					                            <option  value="Jeudi"> Jeudi </option> 
					                        </select>
											
									   <input id="heure_travail2" name="heure_travail2" type="time"  />
										
										<label for="file"><strong> Ajouter photo: </strong></label> 
		                                <input id="foto" name="foto" type="file"  />
										
										<input type="submit" value="Valider" name="submit"/>
										
                                    </form>
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


