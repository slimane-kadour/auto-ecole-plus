<?php
session_start();
if(isset($_SESSION['pseudo']))
{  ?>

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
   <!-- gallerie -->
  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/coin-slider.min.js"></script>
 
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
													<li><a href="inscription.php#ancre">Admission</a></li>
													<li><a href="a propos.php#ancre">A propos</a></li>
													<li><a href="gallerie.php#ancre">Gallerie</a> </li>
													<li><a href="contacts.php#ancre">Contacts</a></li>
													<li><a href="accueil2.php#ancre">Forum</a></li>
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
			            <?php } else{  echo  "<h3>Bonjour  ".$_SESSION['pseudo']."</h3>"; ?>
	                    <a href="deconnexion.php">Déconnexion</a>
				        <?php }?>
					</section>
					
        <div class="container">
	        <div class="inside">
			    <ul id="menud">
                        <li><a href="coordone.php">Coordonnés</a></li>
						<li><a href="examen_resultat.php">Examens et résultat</a></li>
                        <li><a href="paiment.php">Etat du paiement</a></li>
                        <li><a href="#">Boite de réception</a></li>
				</ul> </br> </br>
	  	        <div class="wrapper2">
                    <section id="content">
		                <article>
		</br> </br> 
		  
			 <div class="fiche">
		  
         <h2 align="center" >  Etat du paiment :  </h2>  <hr/> 
		 <p align="center">  Montant à règler ===> 3950 DA </p>
		  <p align="center">  Somme versé ==> 2200 DA </p>
		  <p align="center">  Reste à payer ==> 1750 DA </p>
		  </div>
		 </br> </br>
					 </br> </br>
					 <div class="login_block2">
					 <h2 align="center">  Si vous avez des remarque n'hésiter pas à nous contactez </h2><hr/>
					 <div class="login_block">
					 <form action="" method="POST">
 
                                        
 
                                        <label>Votre Remarque:</label>
                                        <textarea rows="10"></textarea>
										
                                        <input type="submit" value="Envoyer" name="submit"/>
                                    </form>
					 </div>
					 
			               </div>
	                    </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
        <!-- footer -->
            <?php include("include/footer.php"); ?>
        
        <?php    }    else    {      header("location:accueil.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
 
</body>
</html>