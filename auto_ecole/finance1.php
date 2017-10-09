<?php   
      session_start();
        if(isset($_SESSION['admin'])){
?>
								  <?php
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysql_select_db( "a_propos" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "SELECT *
            FROM candidats
	    WHERE identifiant = ".$id ;
 
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
 
 #espPerso3 a {
text-decoration:none;
color:black;
}
#espPerso3 a:hover {
text-decoration:underline;
}
section#espPerso3 {
background-color: #6398BB;
float: right;
margin-right: 20PX;
margin-bottom: -545px;
width: 220px;
margin-top: 90px;
height: 398px;
border: 1px solid #BDB6B6;
}
section#espPerso3 h3 {
background-color: #ABC9EB;
}
table {
font-family: Arial, Helvetica, sans-serif;
color: #666;
font-size: 12px;
text-shadow: 1px 1px 0px #fff;
background: #eaebec;
margin-left: 17px;
margin-top: 174px;
margin-right: 24px;
border: #ccc 1px solid;
-webkit-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0 1px 2px #d1d1d1;
box-shadow: 0 1px 2px #d1d1d1;
}
.ajouter4 form {
width: 355px;
margin: auto;
margin-top: 72px;
}
.imp {
margin-left: 663px;
}
.imp a {
margin-top: -41px;
margin-left: -219px;
margin-bottom: 14px;
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
#apDiv4 {
top: 184px;
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
					<?php 
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM candidats ORDER BY identifiant DESC LIMIT 0,20 ');
		 
					?>
			<section id="espPerso3" class="bloc">
                      <h3>Liste des Candidats </h3>
					  <div class="barre_defilement">
					  <h4> Nom et prenom <span class="droit"></span> </h4> </br>
					   
					  <?php   while ($donnees = $reponse->fetch()){?>
			            <a href="finance1.php?idPersonne=<?php echo $donnees['identifiant'];?>"><?php echo $donnees['nom']." ".$donnees['prenom'] ; ?></br></a>
						
						<?php } ?>
						</div>
					</section>
			    <div class="wrapper2">
				
				   <!-- Menu Direction  -->
		              <?php include("include/menu_direction.php"); ?>
					  <!-- Partie Recherche -->
					<form action="recherche_finance.php" method="post" class="formulaire2">
                                <input type="text" name="search" placeholder="Chercher un candidat" class="champ"/>
                                <input type="submit"   class="butt"  value="Ok" />
                    </form>
							</br> </br> </br>
                    <section id="content">
		                    
						 <article>
						
						    <div class="ajouter">
								
                              

                                <div id="apDiv4">
									 <?php                                  
								  if( $result = mysql_fetch_object( $requete ) )
								  {
								  $rq =$result->remarque;
								 $pt =$result->Prix_total;
								 $ver =$result->versement;
								 $date_versement =$result->Date_versement;
								 $pr = $pt - $ver ;
								?>
								 
										<p>Nom : </p>
										<p>Prenom :</p>
										<p>N°CNI :</p>
										<p>Type de permis :</p>
								</div>
								<div id="apDiv20">
								 
										<p> <?php echo($result->nom) ;?></p>
										<p><?php echo($result->prenom) ;?></p>
										<p><?php echo($result->num_CNI) ;?> </p>
										<p><?php echo($result->type_permis) ;?> </p>
								</div>
									</br> </br>
									<table cellspacing='0' > 
	                <tr>
					    <th>Prix à payer</th>
					    <th>Versement</th>
						<th>Date du dernier versement</th>
						<th>Prix restant</th>
						<th>Remarque</th>
					</tr>
					<tr>
					    <td> <?php echo $pt ; ?></td>
						<td> <?php echo $ver; ?></td>
						<td><?php echo $date_versement; ?></td>
						<td><?php echo $pr; ?></td>
						<td><?php echo $rq; ?></td>	
					</tr>
				</table>	
									<?php 
									}
									 if ($pr == 0) { ?> </br> </br><style>#content {
float: left;
width: 572px;
margin-bottom: 267px;
} 
.imp a {
margin-top: 13px;
margin-left: -375px;
margin-bottom: 14px;
}</style> <?php } else {
									?>
									
									<div class="ajouter4">
							 <form action="finance2.php" method="POST">
			                             
										<input type="hidden" name="id" value="<?php echo($id) ;?>">
                                        <label for="vers"> nouveau Versement : </label>
										<input id="vers" type="text" name="vers">
										
										<label for="date_vers">Date du nouveau  Versement : </label>
										<input id="date_vers" type="date" name="date_vers">
										 </select>
									    <label for="rq">Remarque: </label>
										<input id="rq" type="text" name="rq">
										
										<input type="submit" value="Ajouter" name="submit"/>
									</form>
							
							</div>
							<?php }  ?>
		                     <div class="imp"> 
				                  <a href="imprimer_finance.php?idPersonne=<?php echo $id; ?>" >Imprimer</a>	
				              </div>				
                            </div> 
							 		
			            </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
       
           
        
        <?php    }    else    {      header("location:index.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
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