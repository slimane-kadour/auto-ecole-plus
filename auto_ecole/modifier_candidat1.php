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
            FROM candidats
	    WHERE identifiant = ".$id ;
 
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
.ajouter {
border: 1px solid #BDB6B6;
width: 965px;
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
          <!-- Partie de recherche -->
                
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
				<div class="wrapper2">
				
				  <!-- Menu Direction  -->
		              <?php include("include/menu_direction.php"); ?>
					 
                    <section id="content">
		                    
						 <article>
						    <div class="ajouter">
							<form name="insertion" action="modifier_candidat2.php" method="POST">
							
                                        <input type="hidden" name="id" value="<?php echo($id) ;?>">
										
                                        <label for="nom">Nom : </label>
										<input type="text" name="nom" value="<?php echo($result->nom) ;?>">
 
                                        <label for="prenom">Prenom : </label>
                                        <input type="text" name="prenom" value="<?php echo($result->prenom) ;?>">
										
										<label for="adresse">Adresse  : </label>
                                        <input type="text" name="adresse" value="<?php echo($result->adresse) ;?>">
										
										<label for="dat"><strong>Date de naissances : </strong></label>
			                            <input type="text" name="dat" value="<?php echo($result->date_naiss) ;?>">
										
										<label for="tele">Numéro de téléphone : </label>
                                        <input type="text" name="tele" value="<?php echo($result->num_telephone) ;?>">
										
									   <label for="date2"><strong>Date d'inscription : </strong></label> 
		                               <input type="text" name="date2" value="<?php echo($result->date_inscription) ;?>">
									   
									   <label><strong>Numéro d'inscription : </strong></label> 
		                               <input type="text" name="num_inscr" value="<?php echo($result->num_inscription) ;?>">
									   
									   <label for="permis"><strong>Catégories de permis : </strong></label> 
                                       <input type="text" name="permis" value="<?php echo($result->type_permis) ;?>"> 							   
                                          
				                                
										
										<label for="cni"><strong>Numéro de la carte d'identité : </strong></label>
			                            <input type="text" name="cni" value="<?php echo($result->num_CNI) ;?>"> 
										
										<label for="dat3"><strong>Date du début de cours : </strong></label>
			                            <input type="date" name="dat3" value="<?php echo($result->date_debut_cours) ;?>"> 
										
										
										<label for="email">Adresse Email : </label>
                                        <input type="text" name="email" value="<?php echo($result->email) ;?>">
										
										<label for="versement"><strong> Versement : </strong></label> 
		                                <input type="text" name="versement" value="<?php echo($result->versement) ;?>">
										
										<input type="submit" value="Modifier" name="submit"/>
										
										
									</form>
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