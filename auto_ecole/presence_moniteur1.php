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
            FROM moniteurs
	    WHERE idM = ".$id ;
 
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
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin-left: 56px;
	border:#ccc 1px solid;
	-webkit-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
article h2 {
	font-size: xx-large;
	line-height: 1.2em;
	font-weight: normal;
	color: rgb(24, 41, 94);
	margin-bottom: 3px;
	margin-left: 291px;
	width: 446px;
}
.ajouter {
	border: 1px solid #BDB6B6;
	width: 965px;
	height: 392px;
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
	  	        <div class="wrapper2">
                           <!-- Menu Direction  -->
		              <?php include("include/menu_direction.php"); ?>
					  
                    <section id="content">
		                    
                        <article>
						<?php  if( $result = mysql_fetch_object( $requete ) )
								  { ?>
						 <h2 align="center">Marquer la Présence de <?php  echo($result->nom_M." ".$result->prenom_M) ; } ?> </h2> </br>
						<div class="ajouter">
			               <form action="presence_moniteur2.php" method="POST">
									
									
									 <input type="hidden" name="id" value="<?php echo($id) ;?>">

			                           <label for="lecon"><strong>Type de leçon</strong></label>  </br> 
                                       <select name="lecon" id="lecon" >
												<option  value="rien"> Type de leçon </option>  
												<option  value="pratique" id="pratique"> Pratique </option>   
												<option  value="théorique" id="théorique" > Théorique </option>	
											</select>
											
											<label for="date2"><strong>Date_Leçon : </strong></label> 
		                                <input id="date2" name="date2" type="date"  required="required" />

                                        <label for="presence"><strong>Marquer les présences</strong></label>  </br> 
											 <select name="presence" id="presence" >
												<option  value="rien"> Marquer les présence </option>  
												<option  value="present" id="present">Présent </option>   
												<option  value="Absent" id="Absent" > Absent </option>	
										</select>	
										
										<label for="rq"><strong>Remarque : </strong></label> 
		                                <input id="rq" name="rq" type="text" />
										
										
										<input type="submit" value="Ajouter" name="submit"/>
									</form>
			            </div>
				
	                    </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
       
           
        
       <?php    }    else    {      header("location:index.php?page_introuvable");}    ?>  
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

