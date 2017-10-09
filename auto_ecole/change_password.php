<?php   
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Accueil</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/960.css" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  <!-- gallerie -->
  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/coin-slider.min.js"></script>
 <style> 
  .presse img {
margin-left: 1178px;
margin-top: 445px;
}
</style>
</head>
          
<body>
                    <!-- header -->
						<header>
							<div class="container2">
								<h1><a href="accueil.php">Auto-Ecole Plus</a>
								  <p> <strong>Adresse</strong> : Avenue Aspt Hammou Mokhtar 31000, Oran , Algérie.</p>
								</h1>
								<nav>
									<ul>
										<li><a href="accueil.php" class="current">Accueil</a></li>
										<li><a href="admission.php#ancre">Admission</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
										<li><a href="gallerie.php#ancre">Gallerie</a> </li>
										<li><a href="contacts.php#ancre">Contacts</a></li>
										<li><a href="forum.php#ancre">Forum</a></li>
									</ul>
								</nav>
                            </div>
                        </header>
						
                    <!-- #gallery -->
					    <section id="gallery">
                            <div id="coin-slider"> 
								<a href="#"><img src="images/image3.jpg" width="1000" height="250" alt="" /></a> 
							    <a href="#"><img src="images/image1.jpg" width="1000" height="250" alt="" /></a>
								<a href="#"><img src="images/image2.jpg" width="1000" height="250" alt="" /></a> 
						    </div>
						</section> 
  
    <div class="main-box" id="ancre">
                    <section id="espPerso" class="bloc">
                    <?php if (!isset($_SESSION['connect'])){?>

					    <h3>Mon espace personnel</h3>
						<section id="authent">
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
						</section>
					
			
			<?php } else   if(isset($_SESSION['identifiant']))  { echo  "<h3><a href='coordone.php#ancre'>".$_SESSION['pseudo']."</a></h3>";  ?>
				<a href="deconnexion.php">Déconnexion</a>
				
			<?php }else { echo  "<h3><a href='moniteurs.php'>".$_SESSION['pseudo']."</a></h3>";  ?><a href="deconnexion.php">Déconnexion</a><?php }  ?>
			</section>
			<div class="presse">
			    <a href="http://www.algeriesite.com/fr/dz/presse.php"><img alt="Presse  d'Algerie" title="Presse Algerienne" src="images/journal.gif" width="160" border="0"></a>
		    </div>		
        <div class="container">
	        <div class="inside">
	  	        <div class="wrapper">
				    <!-- aside -->
                         <?php include("include/aside.php"); ?>
                    <section id="content">
		                 <article>
			                <h2> Votre Auto école  <span>Plus</span></h2>
                <p> Située a Oran depuis Mars 2007 , l’Ecole de Conduite Plus met l’accent sur la qualité de sa formation grâce à une équipe de 5 moniteurs dynamiques tous diplômés d’état, qui vous accompagneront 
tout au long de votre formation afin de vous préparer de la meilleure façon à votre examen du permis de conduire et surtout vous former et vous sensibiliser à la sécurité routière. </br></br>
              Vous trouverez dans votre auto-école une multitude d’outils technologiques dans le but de faciliter votre formation (salle de vidéo projection, boitiers Télédis, suivi pédagogique informatisé,
véhicules renouvelés chaque année etc.). </br> </br>

Il est important de noter qu’une auto- école ne vend pas de permis de conduire, mais une formation dans le but de vous présenter à l’examen national du permis de conduire. Ainsi notre équipe
met tout en œuvre pour faire de nos élèves des conducteurs responsables, avec un niveau solide et qui obtiennent leur permis dès la première présentation.

              <figure><a href="#"><img src="images/image2.jpg" alt="" width="600" height="250"></a></figure>
			  <div class="hr"></div>
			  </br>
              <div class="clearover">
                  <div class="imgleft" style="max-width: 100%;width:150px;">
                    <img src="images/cache_2423455471.jpg" alt="" style="width: 100%"/></div>
                        <p><strong>Auto école Plus vous propose ses services</strong></p>
                        <p>Nous proposons des cours dans diverses catégories et mettons tout en oeuvre pour vous préparer à la route. Renseignez-vous ici sur nos cours. </p>
                        <p><a href="type_permis.php">Nos services</a></p>
                            <p> </p>
			  </div>
			  </br> </br>
			  <div class="hr"></div>
			  </br> 
			  <div class="clearover">
                  <div class="imgleft2" style="max-width: 100%;width:150px;">
                    <img src="images/6564620121_ce8058524c_t.jpg" alt="" style="width: 100%"/></div>
                        <p><strong>Auto école Plus vous propose ses services</strong></p></br>
						<p>   Quelques points nous concernant :</p>
                          * Du lundi au samedi, notre équipe se tient à votre disposition pour les cours de code et les leçons de conduite. </br></br>
                           * Nos salles de cours, claires et modernes, sont des espaces non fumeur équipés de chaises confortables.</br></br>
						   * Nos leçons de conduite se dispensent avec une peugeot 208</br></br>
						
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
	
        <!-- footer -->
            <?php include("include/footer.php"); ?>

</body>
</html>
