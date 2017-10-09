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
.ajouter {
border: 1px solid #BDB6B6;
width: 964px;
height: 580px;
}
article h2 {
	font-size: xx-large;
	line-height: 1.2em;
	font-weight: normal;
	color: rgb(24, 41, 94);
	margin-bottom: 3px;
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
				
			

					
				   
                           <!-- Menu Direction -->
		              <?php include("include/menu_direction.php"); ?>
					  
                    <section id="content">
		                    
						 <article>
						   <?php  if( $result = mysql_fetch_object( $requete ) )
								  { ?>
						    <div class="ajouter">
							   <h2 align="center"> Envoyer Un message à <?php  echo($result->nom_M." ".$result->prenom_M) ; } ?> </h2> <hr/>
									
									
			                        <form action="add_message_moniteur.php" method="POST">
									
			                            <input type="hidden" name="id" value="<?php echo($id) ;?>">
										
                                        <label for="titr">Titre : </label>
										<input id="titr" type="text" name="titr">
										
										<label for="message">Message: </label>
										<input id="message" type="text" name="message">
										
										<input type="submit" value="Envoyer" name="submit"/>
										
									</form>
			</br> 
			   </br>
			       </br>
				      </br></br></br> 
					     </br></br></br>
						      </br></br></br>
									</div>
		                         
</div> 
			
     
						</article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
       
           
        
        <?php    }    else    {      header("location:accueil.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
 
</body>
</html>