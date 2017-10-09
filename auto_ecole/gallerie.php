			<?php   
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Gallerie</title>
  <meta charset="utf-8"/>
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
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  <!-- Connexion -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
  <script src="js/login.js"></script>
  <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<style>
table {
margin-left: 158px;
}
</style>
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
										<li><a href="index.php">Accueil</a></li>
										<li><a href="information.php#ancre">Information</a></li>
										<li><a href="nos_services.php#ancre">Nos Service</a></li>
										<li><a href="gallerie.php" class="current">Gallerie</a> </li>
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
										<li><a href="index.php">Accueil</a></li>
										<li><a href="information.php#ancre">Admission</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
										<li><a href="gallerie.php" class="current">Gallerie</a> </li>
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
										<li><a href="index.php">Accueil</a></li>
										<li><a href="information.php#ancre">Admission</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
										<li><a href="gallerie.php" class="current">Gallerie</a> </li>
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
										<li><a href="index.php">Accueil</a></li>
										<li><a href="information.php">Information</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
										<li><a href="gallerie.php"  class="current">Gallerie</a> </li>
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
                   
	            
          
          <!-- content -->
        <section id="content">
            <article>
			 <table width=100% height=100%>
<tr>
<td>
<center>
 <script language="javascript">
      document.write('<object classid="clsid:A763FB1D-703C-40AA-9FFD-4F23ED8D8641" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9.0.0.0"width=" 600" height="450" ID="anee" VIEWASTEXT>');  
      document.write('  <param name="movie" value="gallery.swf" />');  
      document.write('  <param name="quality" value="high" />');  
      document.write('  <param name="wmode" value="window" />');  
      document.write('  <param name="allowScriptAccess" value="always" />'); 
      document.write('  <param name="allowFullScreen" value="True" />');  
      document.write('  <embed src="gallery.swf" quality="high" name="anee" allowScriptAccess="always" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="600" height="450"></embed>');  
      document.write('</object>');  
</script> 
</center>
</td>
</tr>
</table>



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

 