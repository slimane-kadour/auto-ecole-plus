<?php   
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Nos conseils pour choisir son auto-école </title>
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
										<li><a href="index.php" >Accueil</a></li>
										<li><a href="admission.php#ancre" class="current">Admission</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
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
										<li><a href="admission.php" class="current">Admission</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
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
										<li><a href="admission.php"  class="current">Admission</a></li>
										<li><a href="a propos.php#ancre">A propos</a></li>
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
          
            <div class="bloc-contenu">
        	  <h2>Nos conseils pour choisir son auto-école 1/2</h2>
                <strong> <a href="choisir_auto_ecole_1.php#proximite"><strong>1.&nbsp;&nbsp;&nbsp;Proximité</strong></a><strong><br />  
		  <a href="choisir_auto_ecole_1.php#reussite"> 2.&nbsp;&nbsp;&nbsp;Taux de réussite</a><br />  
		  <a href="choisir_auto_ecole_1.php#qualite">  3.&nbsp;&nbsp;&nbsp;Qualité de la  formation</a><br />  
		   <a href="#tarifs">4.&nbsp;&nbsp;&nbsp;Tarifs</a><br />  
  		   <a href="#finance">5.&nbsp;&nbsp;&nbsp;Santé financière</a><br />  
		   <a href="#materiel">6.&nbsp;&nbsp;&nbsp;Matériel</a>
			</strong><a href="choisir_auto_ecole_2.php#materiel"></a>
		   </div>
        
    	
        
        <div id="contenu">
          

		  <h3>Les critères de choix de son auto-école></h3>
		  <p> <img src="images/illustrations/voitureautoecoletop2.JPG" alt="321permis_choix_auto-ecole_2" width="380" height="100" border="0" align="right" />		  </p>

 
  
<h3><br />
  6.    <img src="images/illustrations/materiel3.jpg" alt="321permis_voiture_auto-ecole" width="202" height="147" hspace="10" border="0" align="right" />Matériel<a name="materiel" id="materiel"></a></h3>
<p>Observez la qualité  (état, niveau, entretien, type) du matériel pédagogique : véhicules, mobilier,  support de code, locaux, etc. Un véhicule endommagé, sale ou dépassé peut  laisser présager une formation de mauvaise qualité, voire une situation  financière critique. </p>
<strong>Dans le cadre du permis moto, le matériel a une  importance considérable : </strong><br />
&nbsp;&nbsp;&nbsp;&nbsp;• l’école doit fournir à tous ses élèves des gilets  fluorescents lors de la conduite ;<br />
&nbsp;&nbsp;&nbsp;&nbsp;• lors de l’apprentissage en circulation, le moniteur  doit être relié par radio à ses élèves. Le matériel ne doit donc souffrir  d’aucun défaut ;<br />
&nbsp;&nbsp;&nbsp;&nbsp;• lors de l’apprentissage en plateau, la moto-école  doit disposer d’un espace suffisamment vaste et sécurisé pour acquérir la  ma&icirc;trise de la conduite à moto dans de bonnes conditions.
</p>

<br />
<br />

	<p align="right"><a href="choisir_auto_ecole_1.php">  <em>Début des conseils 1/2 : proximité, taux de réussite et qualité de la formation</em></a></p>
          
      </div>
     

    

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