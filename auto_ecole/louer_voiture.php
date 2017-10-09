<?php   
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Apprendre à conduire sans auto-&eacute;cole en louant une voiture double commande</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style3.css" type="text/css" media="all">
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
										<li><a href="index.php"  class="current">Accueil</a></li>
										<li><a href="information.php#ancre">Information</a></li>
										<li><a href="nos_services.php#ancre">Nos Services</a></li>
										<li><a href="gallerie.php#ancre">Gallerie</a></li>
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
                  <li><a href='index.php'><span> Auto-Ecole Plus</span></a></li>
                  <li><a href='choisir_auto_ecole_1.php#ancre'><span>Choisir son auto-&eacute;cole</span></a></li>
                  <li><a href='louer_voiture.php'  class="current2"><span>Louer une voiture</span></a></li>
                  <li><a href='conduite_accompagne.php#ancre'><span>Apprendre en conduite accompagn&eacute;e</span></a></li>
                </ul>
             </div>
			 </br> </br>
		<!--  <a href="code_de_route.php"><img src="images/Algeria-Oran.png" alt=""   width="300" height="300" align="left"/></a>   -->
       <a href="code_de_rote.pdf"><img src="images/3801.jpg" alt=""   width="230" height="300" align="left"/></a> 
	   <a href="http://www.algeriesite.com/fr/dz/presse.php"><img alt="Presse  d'Algerie" title="Presse Algerienne" src="images/journal.gif" width="160" border="0"></a>
		

       </aside>

          
          <!-- content -->
          <section id="content">
            <article>
            	
    <div class="bloc-contenu">
        	<h2>La location double-commande : apprendre  en conduisant </h2>
        	<strong><a href="conseils-location-double-commande.php" alt="conseils pour louer une auto &eacute;cole">1.&nbsp;&nbsp;&nbsp;Nos conseils</a> <br />
  	<a href="liste-societe-location-voiture-double-commande.php" alt="carte des soci&eacute;t&eacute;s de location de voiture &agrave; double commande">2.&nbsp;&nbsp;&nbsp;O&ugrave; louer une voiture auto &eacute;cole</a><br />
  	<a href="precautions-a-prendre.php" alt="location de voiture &agrave; double commande">3.&nbsp;&nbsp;&nbsp;Les pr&eacute;cautions &agrave; prendre </a><br />
	<a href="permis-candidat-libre.php" alt="passer le permis en candidat libre">4.&nbsp;&nbsp;&nbsp;Le permis en candidat libre </a></strong>
        
</div>
      <div id="contenu">

<p><a href="arrete-16-juillet-2013.php">La  loi (mise &agrave; jour le 16/07/13)</a> permet de s'entrainer &agrave; conduire sur une voiture, de type auto &eacute;cole, &eacute;quip&eacute;e de double commande ou de passer le permis en candidat libre sans passer par une auto-&eacute;cole.</p>
<p>En effet il existe trois  types d'apprentissage de la conduite en France&nbsp;: La <a href="conduite-accompagnee.php"> conduite accompagn&eacute;e</a>,  les<a href="choix-auto-ecole-1.php"> auto-&eacute;coles</a> &agrave; titre on&eacute;reux et aussi l’apprentissage &agrave; titre gratuit  sur des voitures &agrave; double commande.</p>
<p>Dans ce dernier cas, le  candidat peut prendre des leçons de conduite b&eacute;n&eacute;voles aux conditions suivantes  :</p>

Etre &acirc;g&eacute; de plus de seize ans </br>
Disposer d'un formulaire de demande de permis de conduire, conforme aux dispositions pr&eacute;vues &agrave; l'arr&ecirc;t&eacute; du 20 avril 2012 tamponn&eacute; par le pr&eacute;fet du d&eacute;partement dans lequel la demande a &eacute;t&eacute; d&eacute;pos&eacute;e ou d'un r&eacute;c&eacute;piss&eacute; de d&eacute;p&ocirc;t de la demande pour le permis de conduire B</br>
Disposer d’un <u>livret d'apprentissage</u> 
  <em>Note: ce livret peut être achet&eacute; en ligne auprès de la <a href="http://www.ladocumentationfrancaise.fr/ouvrages/9782110078285-livret-d-apprentissage-b">Documentation Francaise </a> pour 2,38 euros. </em> <br />
<em>Lors de l'apprentissage de la conduite, ces deux documents doivent être pr&eacute;sents dans le v&eacute;hicule. Seul le formulaire de demande de permis de conduire ou le r&eacute;c&eacute;piss&eacute; de d&eacute;p&ocirc;t de cette demande permet de justifier de la situation d'apprentissage en cas de contrôle par les agents</em>.</br>
  <u><a href="http://www.ladocumentationfrancaise.fr/ouvrages/9782110078285-livret-d-apprentissage-b"><img src="images/Livret-d-apprentissage-B_large.jpg" alt="livret apprentisssage permis " width="100" height="143" vspace="5" hspace="5" border="0" align="right" /></a></u>Utiliser une voiture &eacute;quip&eacute;e de double-commande de frein et d’embrayage et de 2 r&eacute;troviseurs int&eacute;rieurs et       2 r&eacute;troviseurs lat&eacute;raux</br>
   Le v&eacute;hicule utilis&eacute; doit être identifi&eacute; par un panneau de toit "Apprentissage" ou par une inscription plac&eacute;e &agrave; l'avant et &agrave; l'arrière du v&eacute;hicule mentionnant "Apprentissage" </br>

  
  
 
&Ecirc;tre accompagn&eacute; d'une  personne titulaire du permis B depuis plus de 5 ans sans interruption qui devra <a href="arrete-16-juillet-2013.php">&agrave; partir du 1er octobre 2013 </a>suivre une formation de 4H avec un enseignant titulaire d'une autorisation d'enseigner la conduite.</br>


<br />
<p>
</p>

<p><strong>Les avantages&nbsp;:</strong></p>
<p>Il est possible de se  former &agrave; moindre coût, une heure de location revient ainsi 40 &agrave; 50 % moins cher qu’une heure de formation en  auto-&eacute;cole. En passant les examens en candidat libre, les frais de pr&eacute;sentation  &agrave; l’examen (code, conduite) sont gratuits et le candidat maîtrise sa date d’examen sans d&eacute;pendre du bon vouloir de l'auto-&eacute;cole et des arbitrages entre les candidats.      </p>
<p>Or c'est en pratiquant que l'on apprend, cette formule permet donc au candidat d'acqu&eacute;rir plus d'exp&eacute;rience de la route avant de passer son permis. </p>
<p> La location conviendra aux candidats auxquels leurs proches ne peuvent pas prêter de voiture pour s'entraîner ou qui se sentent rassur&eacute;s par la possibilit&eacute; pour l'accompagnateur d'intervenir gr&agrave;ce &agrave; la double commande.</p><br />

     
     </div>
 
    
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
