<?php
session_start();
if(isset($_SESSION['pseudo']))
{  
 $id  =  $_SESSION['idm'] ; 
 	
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysql_select_db( "a_propos" ) ;
 
 
 
  //requête SQL:
  $sql = "SELECT *
            FROM moniteurs
	    WHERE idM = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 if( $result = mysql_fetch_object( $requete ) )
								  { 
		?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto-Ecole Plus| Espace_Candidats</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <link rel="stylesheet" href="css/960.css" />
  <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
  
  
<style>
.image_candidat img {
margin-left: -7px;
margin-top: -63px;
}

#navigationheader {
position: absolute;
left: 305px;
top: 53px;
width: 620px;
height: 52px;
margin: 0;
border-bottom: 1px solid #c1c1c1;
background-image: url("images/designcascade.gif");
background-repeat: no-repeat;
background-position: bottom right;
}	
#navigationheader ul {
display: block;
margin: 14px 0 0 16px;
padding: 0;
}
#navigationheader ul li {
display: inline;
margin: 0 16px 0 0;
padding: 0;
list-style: none;
}
#navigationheader ul li a#navinformation {
background-position: 0 -144px;
font-size: larger;
}
#navigationheader ul li a#navsuggestion {
background-position: 0 -224px;
font-size: larger;
}

#navigationheader ul li a {
font-size: 0.9em;
font-weight: bold;
letter-spacing: 0em;
text-decoration: none;
background-image: url("http://static.oswd.org/layout/icons.gif");
background-repeat: no-repeat;
padding: 0 0 0 28px;
background-color: #fff;
}
#navigationheader ul li a:link, #navigationheader ul li a:visited {
color: #636363;
}
#navigationheader ul li a:hover{
color: #85C329;
}

#logo h1 {
width: 215px;
height: 168px;
margin: -168px 0 0 12px;
padding: 0;
background-image: url("images/logo-autoecole2.png");
background-repeat: no-repeat;
background-position: 0 0;
text-indent: -1000em;
overflow: hidden;
position: relative;
}
#navigationmain h2 {
height: 40px;
margin: 0 0 3px 0;
padding: 0;
}
#navigationmain ul {
width: 199px;
margin: 0;
padding: 0;
border-top: 1px solid #c1c1c1;
}
#navigationmain ul li {
margin: 0;
padding: 0;
border-bottom: 1px solid #c1c1c1;
list-style: none;
}
#navigationmain ul li a#navhome {
background-position: 0 -96px;
font-size: x-large;
}
#navigationmain ul li a#navfavorites {
background-position: 0 -112px;
font-size: x-large;
}
#navigationmain ul li a#navbrowse {
background-position: 0 -64px;
font-size: x-large;
}
#navigationmain ul li a#navsearch {
background-position: 0 -240px;
font-size: x-large;
}
#navigationmain ul li a#navbrowse {
background-position: 0 -64px;
font-size: x-large;
}
#introduction {
position: absolute;
left: 307px;
top: 127px;
/* width: 529px; */
width: 620px;
height: 78px;
border-bottom: 1px solid #c1c1c1;
background-image: url("images/candidats.gif");
background-position: top left;
background-repeat: no-repeat;
}

#introduction p {
width: 349px;
/* width: 406px; */
height: 75px;
margin: 0;
padding: 0;
position: absolute;
left: 280px;
top: -7px;
font-size: medium;
line-height: 112%;
font-family: monospace;
}
#introduction p strong {
color: #85C329;
}
#content {
float: left;
/* width: 529px; */
width: 620px;
margin-left: 175px;
margin-top: 3Spx;
}
#contentsectionleft {
float: left;
width: 198px;
margin: 0 0 30px 0;
padding-top: 26px;
background-position: top left;
background-repeat: no-repeat;
}
#history {
margin: 0 0 0 12px;
}
#content #contentsectionleft h2 {
margin: 0;
padding: 25px 0;
border-bottom: 1px solid #c1c1c1;
}
#history h3 {
font-size: 1.1em;
color: #85C329;
}
#history p {
font-size: medium;
line-height: 160%;
color: #636363;
margin-left: -10px;
margin-right: -74px;
position: relative;
}
#contentsectionright {
margin: 0 0 30px 3px;
float: left;
width: 418px;
padding-top: 26px;
background-position: top left;
background-repeat: no-repeat;
}
#content #contentsectionright #staff h2 {
padding: 25px 0;
border-bottom: 1px solid #c1c1c1;
margin-left: 91px;
}
#staff .member {
border-top: 1px solid #fff;
margin-top: 20px;
margin-left: 54px;
}
#staff img {
margin: -19px 24px 24px 0;
float: left;
}

#staff p {
clear: left;
margin: 0px;
padding: 10px 10px 20px 25px;
background-color: #f4f4f4;
font-size: 0.8em;
line-height: 160%;
color: #636363;
}
#apDiv11 {
position: absolute;
width: 200px;
height: 115px;
z-index: 1;
left: -51px;
top: 245px;
}
#apDiv11 a {
width: 100px;
}

#contentsection p {
margin: 40px 40px 35px 40px;
padding: 20px 30px 20px 30px;
background-color: #f4f4f4;
font-size: 1.8em;
line-height: 160%;
color: #636363;
font-family: monospace;
}
</style>
</head>

<body>

			                    <!-- header -->
									<header>
										<div class="container2">
											<h1>
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="350" height="72" id="FlashID" title="logo">
								      <param name="movie" value="images/logo.swf">
								      <param name="quality" value="high">
								      <param name="wmode" value="opaque">
								      <param name="swfversion" value="8.0.35.0">
								      <!-- Cette balise param invite les utilisateurs de Flash Player en version 6.0 r65 et ultérieure à télécharger la version la plus récente de Flash Player. Supprimez-la si vous ne voulez pas que cette invite soit visible. -->
								      <param name="expressinstall" value="Scripts/expressInstall.swf">
								      <!-- La balise <object> suivante est destinée aux navigateurs autres qu'IE. Supprimez-la d'IE à l'aide d'IECC. -->
								      <!--[if !IE]>-->
								      <object type="application/x-shockwave-flash" data="images/logo.swf" width="350" height="72">
								        <!--<![endif]-->
								        <param name="quality" value="high">
								        <param name="wmode" value="opaque">
								        <param name="swfversion" value="8.0.35.0">
								        <param name="expressinstall" value="Scripts/expressInstall.swf">
								        <!-- Le navigateur affichera le contenu alternatif suivant pour les utilisateurs d'un lecteur Flash de version 6.0 ou de versions plus anciennes. -->
								        <div>
								          <h4>Le contenu de cette page nécessite une version plus récente d’Adobe Flash Player.</h4>
								          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtenir le lecteur Adobe Flash" /></a></p>
							            </div>
								        <!--[if !IE]>-->
							          </object>
								      <!--<![endif]-->
							        </object>
								  </p>
								</h1>
											<nav>
												<ul>
													<li><a href="index.php" class="current">Accueil</a></li>
													<li><a href="information.php#ancre">Information</a></li>
													<li><a href="nos_services.php#ancre">Nos Services</a></li>
													<li><a href="gallerie.php#ancre">Gallerie</a> </li>
													<li><a href="contacts.php#ancre">Contacts</a></li>
													<li><a href="forum.php#ancre">Forum</a></li>
												</ul>
											</nav>
										</div>
									</header>
							    
 
  <div class="main-box">
                         <!-- #gallery --> 
	                    <section id="gallery">
                            <div id="coin-slider">
                              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="255" id="FlashID2" title="acceuil">
                                <param name="movie" value="images/logo_acceuil.swf">
                                <param name="quality" value="high">
                                <param name="wmode" value="opaque">
                                <param name="swfversion" value="8.0.35.0">
                                <!-- Cette balise param invite les utilisateurs de Flash Player en version 6.0 r65 et ultérieure à télécharger la version la plus récente de Flash Player. Supprimez-la si vous ne voulez pas que cette invite soit visible. -->
                                <param name="expressinstall" value="Scripts/expressInstall.swf">
                                <!-- La balise <object> suivante est destinée aux navigateurs autres qu'IE. Supprimez-la d'IE à l'aide d'IECC. -->
                                <!--[if !IE]>-->
                                <object type="application/x-shockwave-flash" data="images/logo_acceuil.swf" width="1000" height="255">
                                  <!--<![endif]-->
                                  <param name="quality" value="high">
                                  <param name="wmode" value="opaque">
                                  <param name="swfversion" value="8.0.35.0">
                                  <param name="expressinstall" value="Scripts/expressInstall.swf">
                                  <!-- Le navigateur affichera le contenu alternatif suivant pour les utilisateurs d'un lecteur Flash de version 6.0 ou de versions plus anciennes. -->
                                  <div>
                                    <h4>Le contenu de cette page nécessite une version plus récente d’Adobe Flash Player.</h4>
                                    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtenir le lecteur Adobe Flash" /></a></p>
                                  </div>
                                  <!--[if !IE]>-->
                                </object>
                                <!--<![endif]-->
                              </object>
                            </div>
						</section> 
                    <section id="espPerso" class="bloc">
                        <?php if (!isset($_SESSION['connect'])){?>
			            <?php } else{  echo  "<h3><a href='moniteurs.php'>".($result->prenom_M)." ".$_SESSION['pseudo']."</a></h3>"; ?>
	                    <h3><a href="deconnexion.php">Déconnexion</a></h3>
						<h3><a href="#?w=500" rel="popup_name2" class="poplight">Changer le mot de passe ?</a></h3>
				        
				        <?php }?>
					</section>
					
        <div class="container">
	        <div class="inside">
			     <div class="image_candidat">   <img src="images/secondNav-module.png"/>  </div> </br>
				 
				 <div id="logo">

					<h1>Open Source Web Design</h1>

				</div>
				<div id="navigationheader">
                    <ul>
						<li><a id="navinformation" href="moniteurs.php">Information</a></li>
						<li><a id="navsuggestion" href="message_moniteurs.php#ancre">Faire une remarque</a></li>
					</ul>
                </div>
				
	  	        <div class="wrapper2"  id="ancre">
				
                    <section id="content">
				
		                <article>
	                
					
								  
				<div id="introduction">

					

					<p>
						<strong><?php echo ($result->nom_M." ".$result->prenom_M.".");?></strong>Bienvenue dans notre page, vous trouverez ici toutes les informations nécessaires.
					</p>
</div>
				<div id="content">

<div id="contentsection">

				<?php 
												try
									{
									 
									 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
									}
									catch(Exception $e)
									{

									 die('Erreur : '.$e->getMessage());
									}
									$reponse = $bdd->query('SELECT * FROM lecon WHERE idM = '.$id.'');
												?>					  
		
		<p>
			Les jours de travails :  </br> <?php while ($donnees = $reponse->fetch()){
					                             ?>
												 <?php echo $donnees['Jour_lecon']; ?> ==> <?php echo $donnees['Heure_lecon']; ?></br>
		                                <?php } $reponse->closeCursor(); ?>
								    
		</p>
		
	
		

		</div>


<div id="contentsectionleft">



	<!-- START HISTORY -->

	<div id="history">
					
		<h2>Informations</h2>	
													
		<h3></h3>

		<p>
			<strong>Email : </strong><?php echo($result->email_M) ;?>
		</p>
		
         <p>
			<strong>Numéro CNI : </strong><?php echo($result->num_CNI) ;?>
		</p>

		<p>
			 <strong>Numéro de diplome  :</strong><?php echo($result->num_diplome) ;?>
			
		</p>
            
		<p>
			<strong>Numéro de téléphone :</strong><?php echo($result->numero_telph) ;?>
		</p>
		<?php 
									
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}
									
									$present = '"present"';
									$reponse = $bdd->query('SELECT COUNT(*) as nbre_presence  FROM presence_moniteur WHERE idM= '.$id.' and marquer_presence ='.$present.'');
									 while ($donnees = $reponse->fetch()){
					?>
		<p>
			<strong>Nombre de présence :</strong><?php  echo $donnees['nbre_presence']; }
			 $absent = '"absent"';
									$reponse = $bdd->query('SELECT COUNT(*) as nbre_absence  FROM presence_moniteur WHERE idM= '.$id.' and marquer_presence ='.$absent.'');
									 while ($donnees = $reponse->fetch()){
			?>
		</p>
		<p>
			<strong>Nombre d'absence :</strong><?php echo $donnees['nbre_absence'];  }?>
		</p>


	</div>

	<!-- END HISTORY -->
					


</div>



<div id="contentsectionright">



	<!-- START STAFF -->

	<div id="staff">

		<h2>Vous etes?</h2>



		<!-- START MEMBER -->

		<div class="member">

			<img src="<?php echo "images/".$result->foto;?>" width="120" height="160" border="" />

			<h3><?php echo ($result->nom_M." ".$result->prenom_M.".");?></h3>

			<h4><?php echo($result->adresse_M) ;?></h4>

	    </div>

		<!-- END MEMBER -->

	</div>

</div>




			</div>
<?php 
									}
									?>
				
		
	                    </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
        <!-- footer -->
            <?php include("include/footer.php"); ?>
        
        <?php    }    else    {      header("location:accueil.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
 
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