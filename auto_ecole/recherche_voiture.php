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
	margin-top: 90px;
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
#espPerso3 p {
font-weight: bolder;
color: rgb(165, 33, 33);
font-size: larger;
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

mysql_connect("localhost","root","")  or die ("impossible de ce connecter");

mysql_select_db("a_propos") or die("cette base de donne n existe pas");

    
  $output='';
  
$searchq = $_POST['search'];
	 
  $query=mysql_query("SELECT * FROM voiture WHERE modele LIKE '%$searchq%' OR type_voiture LIKE '%$searchq%'") or die ("could not search!");   
   
   $count = mysql_num_rows($query);
     if($count == 0){ ?>
              
               <section id="espPerso3" class="bloc">
                        
			            <h3>Liste des Candidats </h3>
	                  
					  <p> Aucun Résultat Trouvé </p>
						
						
					</section>		  
                   
               <?php    }else{   ?>
                               
			        <section id="espPerso3" class="bloc">
                        
			            <h3>Liste des Voitures </h3>
	                   <h4> Modèle <span class="droit">Type</span> </h4> </br>
					  <?php   while($rows = mysql_fetch_array($query)){
												  $id=$rows['idV'];
												 $modèle=$rows['modele'];
												  $type_voiture=$rows['type_voiture'];
												  
											?> 
					   <a href="modifier_voiture.php?idPersonne=<?php echo $id ;?>"><?php echo $modèle."<span class='droit'>".$type_voiture."</span>" ; ?></br></a>
						
						<?php } } ?>
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
						    <div class="ajouter">
								
			
			<form action="add_voiture.php" method="POST">
 
                                        <p><label for="typeV">Type de voiture : </label>
										<input id="typeV" type="text" name="typeV" required="required"></p>
 
                                        <p><label for="modele">Modèle: </label>
                                        <input id="modele" type="text" name="modele" required="required"></p>
										
										<label for="matricule">Immatriculation  : </label>
                                        <input id="matricule" type="text" name="matricule" required="required">
										
									
										
										<label for="etat">Etat : </label>
                                        <input id="etat" type="text" name="etat"  required="required">
										
										<img src="images/Vehicules-Voiture-61102.jpg" width="500" height="350" align="left"/>
										
										<input type="submit" value="Valider" name="submit"/>
										
                                    </form>
									</br> </br>
</div> 
				
     </br> </br>
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