<?php   
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Nos Services</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <!-- Connexion -->  <link rel="stylesheet" href="css/style3.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/960.css" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  <!-- Connexion -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
  <script src="js/login.js"></script>
  <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

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
										<li><a href="index.php#ancre">Accueil</a></li>
										<li><a href="information.php#ancre">Information</a></li>
										<li><a href="nos_services.php" class="current">Nos Service</a></li>
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
						<?php } else   if(isset($_SESSION['identifiant']))  {?>

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
										<li><a href="index.php#ancre">Accueil</a></li>
										<li><a href="information.php#ancre">Information</a></li>
										<li><a href="nos_services.php"  class="current">Nos Services</a></li>
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
			
			
			echo  "<h3><a href='coordone.php#ancre'>".($result->prenom)." ".$_SESSION['pseudo']."</a></h3>"; } ?>
			<a href="deconnexion.php">Déconnexion</a>
			<a href="#?w=500" rel="popup_name2" class="poplight">Changer le mot de passe ?</a>	
			
			</section>
  
             <?php } else  if(isset($_SESSION['idm']))  { 	?>	
			
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
										<li><a href="index.php#ancre">Accueil</a></li>
										<li><a href="information.php#ancre">Information</a></li>
										<li><a href="nos_services.php" class="current">Nos Services</a></li>
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
			<?php }  else { ?>
			
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
										<li><a href="index.php#ancre">Accueil</a></li>
										<li><a href="information.php#ancre">Information</a></li>
										<li><a href="a propos.php"  class="current">Nos Services</a></li>
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
              <?php
			echo  "<h3><a href='candidat.php'>".$_SESSION['pseudo']."</a></h3>";  ?>
			<a href="deconnexion.php">Déconnexion</a>
			<a href="#?w=500" rel="popup_name2" class="poplight">Changer le mot de passe ?</a>
			</section>
			<?php } ?>
        <div class="container">
	        <div class="inside">
	  	        <div class="wrapper">
				     <!-- aside -->
		
          <aside>
		  
        
		</br> </br> 
		<div id='cssmenu'>
                <ul>
                  <li><a href='permisB.php'><span>Permis B </span></a></li>
                  <li><a href='permisAAC.php' class="current2"><span>Permis AAC</span></a></li>
                  <li><a href='permisE(B).php'><span>Permis E(B)</span></a></li>
                  <li><a href='handiconduite.php'><span>Handi'conduite</span></a></li>
                 </ul>
             </div>
			 </br> </br>
		
       <a href="code_de_rote.pdf"><img src="images/3801.jpg" alt=""   width="230" height="300" align="left"/></a> 
	    <a href="http://www.preventionroutiere.asso.fr/Espace-multimedia/Tests-Code-de-la-route"><img alt="" src="images/896805111.jpg" width="230" height="300" align="left" class="quiz"></a>
		

       </aside>
                    <section id="content">
					    <article>
						<div class="bloc-contenu">
						 <div class="clearover">
                  <div class="imgleft" style="max-width: 100%;width:150px;">
                    <img src="images/permis-auto-permis-AAC-conduite-accompagnee.jpg" alt="" style="width: 100%"/></div>
                        <strong><a href="#principe">1.&nbsp;Principe</a><br />  
				        <a href="#age_autoriser"> 2.&nbsp;Age du candidat</a><br />  
				        <a href="#suivi"> 3.&nbsp;Suivi de la formation</a><br />  
				        <a href="#condition">  4.&nbsp;Conditions de circulation</a><br /> 
				</div>
			     </div>     
<div id="contenu">
          <h3>
		    1.  Principe <a name="principe" id="principe"></a></h3>
		<p> 
		Les 3 étapes de la formation :
		1-&nbsp;formation initiale dans une auto-école.</br>
		2-&nbsp;conduite accompagnée d'un adulte, avec un suivi pédagogique par l'auto-école.</br>
		3-&nbsp;présentation au permis de conduire.
		</p>
		<div class="hr"></div>
		<h3>
		    2. Age du candidat<a name="age_autoriser" id="age_autoriser"></a></h3>
			<p> Le candidat doit être âgé de 16 à 18 ans lors de l'inscription et de 18 ans minimum pour présenter les épreuves pratiques du permis de conduire B.
			</p>
			<div class="hr"></div>
			<h3>
		    3. Suivi de la formation<a name="suivi" id="suivi"></a></h3>
			<p> 3 rendez-vous pédagogiques sont obligatoires :<br>
			1-&nbsp;le premier avec l'accompagnateur et le moniteur d'une durée minimale de 2 heures,</br>
			2-&nbsp;le second, après 6 ou 8 mois de conduite accompagnée et environ 1000 km parcourus,</br>
			3-&nbsp;le troisième, lorsque l'élève a parcouru au moins 3.000 km.</br>
			Au terme de sa formation, le candidat doit présenter les épreuves pratiques dont un parcours de 20 minutes en circulation. </br>
			Les résultats des évaluations effectuées sont transcrits sur un livret d'apprentissage qui lui est remis par l'auto-école. </br>
			Quand le candidat obtient le permis de conduire, l'auto-école lui délivre une attestation de fin de conduite accompagnée. 
            Cette attestation doit être remise à l'assureur afin d'obtenir des rabais sur la surprime jeune conducteur.
			
                   </p>
			<div class="hr"></div>
			<h3>
		    4. Conditions de circulation<a name="condition" id="condition"></a></h3>
			<p> 
			La vitesse est limitée: </br>
			*&nbsp;à 110 km/h sur les sections d'autoroutes où la vitesse est limitée à 130 km/h</br>
			*&nbsp;à 100 km/h sur les autres sections d'autoroutes et les routes à deux chaussées séparées par un terre-plein central</br>
			*&nbsp;à 80 km/h sur les autres routes</br>
			*&nbsp;à 50 km/h en agglomération</br>
			<p><strong>La circulation est interdite en territoire étranger.</strong></p>
			</p>
			
		</div>				 

				 
<div id="btn_up"><img alt="Retour en haut" title="Retour en haut" src="images/fleche_haut_gris.png" width="40" /></div>
		 <script type="text/javascript">
    $(function(){
        $('#btn_up').click(function() {
          $('html,body').animate({scrollTop: 0}, 'slow');
        });
    });
    </script>
	
	                   </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
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
       
			
       