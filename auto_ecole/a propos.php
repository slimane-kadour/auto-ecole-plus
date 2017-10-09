			<?php   
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto-Ecole Plus| A propos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style3.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/960.css" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  
   <!-- gallerie -->
  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/coin-slider.min.js"></script>
  <!-- Gallerie du fond -->
  <script type="text/javascript" src="js/slider.js"></script>
  <!-- Connexion -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
  <script src="js/login.js"></script>
  
</head>

<body>
<?php if (!isset($_SESSION['connect'])){?>
<!-- Login Starts Here -->
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Connexion</span></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" method="post" action="connect.php">
                        <fieldset id="body">
                            <fieldset>
                                <label for="pseudo">Nom :</label>
                                <input type="text" name="pseudo" id="pseudo" required="required" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Mot de passe :</label>
                                <input type="password" name="password" id="password" required="required"/>
                            </fieldset>
							<input type="submit" value="Connexion" name="submit" id="login"/>
                        </fieldset>
                        
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
			
			<!-- Dynamic Background -->
		<div id="headerimgs">
			<div id="headerimg1" class="headerimg"></div>
			<div id="headerimg2" class="headerimg"></div>
		</div>
  <!-- header -->
  <header>
     <div class="container2">
    	<h1><a href="accueil.php">Auto-Ecole Plus</a>
		  <p> <strong>Adresse</strong> : Avenue Aspt Hammou Mokhtar 31000, Oran , Algérie.</p></h1>
     <nav>
	     <ul>
           <li><a href="index.php">Accueil</a></li>
           <li><a href="admission.php#ancre">Admission</a></li>
           <li><a href="a propos.php" class="current">A propos</a></li>
           <li><a href="gallerie.php#ancre">Gallerie</a> </li>
           <li><a href="contacts.php#ancre">Contacts</a></li>
           <li><a href="forum.php#ancre">Forum</a></li>
         </ul>
     </nav>
	  
    </div>
	</header>
  
  <div class="main-box" id="ancre">
                     <!-- #gallery --> 
	                    <section id="gallery">
                            <div id="coin-slider"> 
								<a href="#"><img src="images/logo-auto-ecole.PNG" width="1000" height="255" alt="" /></a> 
							    <a href="#"><img src="images/image3.jpg" width="1000" height="250" alt="" /></a>
								<a href="#"><img src="" width="1000" height="250" alt="" /></a> 
						    </div>
						</section> 
   <?php } else   if(isset($_SESSION['identifiant']))  {?>
<!-- Dynamic Background -->
		<div id="headerimgs">
			<div id="headerimg1" class="headerimg"></div>
			<div id="headerimg2" class="headerimg"></div>
		</div>
                    <!-- header -->
						<header>
							<div class="container2">
								<h1><a href="accueil.php">Auto-Ecole Plus</a>
								  <p> <strong>Adresse</strong> : Avenue Aspt Hammou Mokhtar 31000, Oran , Algérie.</p>
								</h1>
								<nav>
									<ul>
										<li><a href="index.php">Accueil</a></li>
										<li><a href="admission.php">Admission</a></li>
										<li><a href="a propos.php"  class="current">A propos</a></li>
										<li><a href="gallerie.php#ancre">Gallerie</a> </li>
										<li><a href="contacts.php#ancre">Contacts</a></li>
										<li><a href="forum.php#ancre">Forum</a></li>
									</ul>
								</nav>
                            </div>
                        </header>
						
                    
					    
    <div class="main-box" id="ancre">
	                <!-- #gallery --> 
	                    <section id="gallery">
                            <div id="coin-slider"> 
								<a href="#"><img src="images/logo-auto-ecole.PNG" width="1000" height="255" alt="" /></a> 
							    <a href="#"><img src="images/image3.jpg" width="1000" height="250" alt="" /></a>
								<a href="#"><img src="" width="1000" height="250" alt="" /></a> 
						    </div>
						</section> 
  
                  <section id="espPerso" class="bloc">
                    
		<?php	$id  =  $_SESSION['identifiant'] ;
 	
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysql_select_db( "a_propos" ) ;
 
 
 
  //requête SQL:
  $sql = "SELECT *
            FROM candidats
	    WHERE identifiant = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 if( $result = mysql_fetch_object( $requete ) )
								  { 
			
			echo  "<h3><a href='coordone.php?#ancre'>".($result->prenom)." ".$_SESSION['pseudo']."</a></h3>"; } ?>
			<a href="deconnexion.php">Déconnexion</a>
			<a href="#?w=500" rel="popup_name2" class="poplight">Changer le mot de passe ?</a>
			</section>
  
             <?php } else { 	?>	
			  <!-- Dynamic Background -->
		<div id="headerimgs">
			<div id="headerimg1" class="headerimg"></div>
			<div id="headerimg2" class="headerimg"></div>
		</div>
                    <!-- header -->
						<header>
							<div class="container2">
								<h1><a href="accueil.php">Auto-Ecole Plus</a>
								  <p> <strong>Adresse</strong> : Avenue Aspt Hammou Mokhtar 31000, Oran , Algérie.</p>
								</h1>
								<nav>
									<ul>
										<li><a href="index.php">Accueil</a></li>
										<li><a href="admission.php">Admission</a></li>
										<li><a href="a propos.php"   class="current">A propos</a></li>
										<li><a href="gallerie.php#ancre">Gallerie</a> </li>
										<li><a href="contacts.php#ancre">Contacts</a></li>
										<li><a href="forum.php#ancre">Forum</a></li>
									</ul>
								</nav>
                            </div>
                        </header>
						
                    
					    
    <div class="main-box" id="ancre">
	                <!-- #gallery --> 
	                    <section id="gallery">
                            <div id="coin-slider"> 
								<a href="#"><img src="images/logo-auto-ecole.PNG" width="1000" height="255" alt="" /></a> 
							    <a href="#"><img src="images/image3.jpg" width="1000" height="250" alt="" /></a>
								<a href="#"><img src="" width="1000" height="250" alt="" /></a> 
						    </div>
						</section> 
  <section id="espPerso" class="bloc">
              <?php  $id  =  $_SESSION['idm'] ; 
 	
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
			echo  "<h3><a href='moniteurs.php#ancre'>".($result->prenom_M)." ".$_SESSION['pseudo']."</a></h3>";  }?>
			<a href="deconnexion.php">Déconnexion</a>
			<a href="#?w=500" rel="popup_name2" class="poplight">Changer le mot de passe ?</a>
			</section>
			<?php } ?>
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
                        <?php include("include/aside.php"); ?>
             
          <!-- content -->
          <section id="content">
            <article>
            	<h2>About <span>Your Team</span></h2>
              <!-- .team-list -->
              <ul class="team-list">
              	<li>
                	<figure><img src="images/img2.jpg" alt=""></figure>
                  <h3><a href="#">Team Member One</a></h3>
                  He is the most important member of your team. Usually this is the person who started the website. Maybe it is worth to write why he has made such a decision and what has inspired him <a href="#">...</a>
                </li>
                <li>
                	<figure><img src="images/img3.jpg" alt=""></figure>
                  <h3><a href="#">Another Team Member</a></h3>
                  We are completly lost on what he's responsible for, but we hope that you know it. We also hope that you will tell it to the rest of the world including us by placing some real text here <a href="#">...</a>
                </li>
                <li>
                	<figure><img src="images/img4.jpg" alt=""></figure>
                  <h3><a href="#">Another Team Member</a></h3>
                  We are completly lost on what he's responsible for, but we hope that you know it. We also hope that you will tell it to the rest of the world including us by placing some real text here <a href="#">...</a>
                </li>
              </ul>
              <!-- /.team-list -->
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
   <?php include("include/footer.php"); ?>
 
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


 