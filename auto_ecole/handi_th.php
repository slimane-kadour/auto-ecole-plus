<?php   
      session_start();
        if(isset($_SESSION['admin'])){
		$type_permis = '"handiconduite"'; 
		$type_lecon = '"theorique"'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Accueil</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style4.css" type="text/css" />
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
 
 <style>
table {
font-family: Arial, Helvetica, sans-serif;
color: #666;
font-size: 12px;
text-shadow: 1px 1px 0px #fff;
background: #eaebec;
margin-left: -107px;
margin-top: -17px;
margin-right: 49px;
border: #ccc 1px solid;
-webkit-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0 1px 2px #d1d1d1;
box-shadow: 0 1px 2px #d1d1d1;
}
section#espPerso3 {
background-color: #D5D5E0;
float: right;
margin-right: 20PX;
margin-bottom: -545px;
width: 220px;
margin-top: 90px;
height: 233px;
border: 1px solid #BDB6B6;
}
#espPerso3 a {
text-decoration:none;
color:black;
}
#espPerso3 a:hover {
background: rgb(165, 169, 179);
}
.ajouter {
border: 1px solid #BDB6B6;
width: 965px;
padding-bottom: 26px;
}
.ajouter4 form {
width: 355px;
margin: auto;
margin-top: 16px;
}
.ajouter input[type=radio] {
border-radius: 2px;
padding: 10px;
background: #F9F9F9;
font-size: 14px;
color: #909090;
width: 67px;
margin-left: 41px;
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
					  <ul id="menud2">
					    <li><a href="#">Permis B</a>
						<ul>
                                <li><a href="permisB_th.php">Théorique</a></li>
								<li><a href="permisB_prt.php">Pratique</a></li>
						</ul>
						</li>
                        <li><a href="#">Permis AAC</a>
						 <ul>
                                <li><a href="permisAAC_th.php">Théorique</a></li>
								<li><a href="permisAAC_prt.php">Pratique</a></li>
                            </ul>
						</li>
                        <li><a href="#">Permis E(B)</a>
						<ul>
                                <li><a href="permisEB_th.php">Théorique</a></li>
								<li><a href="permisEB_prt.php">Pratique</a></li>
							</ul>
						</li>
                       <li><a href="#">Handi'conduite</a>
						    <ul>
                                <li><a href="handi_th.php">Théorique</a></li>
								<li><a href="handi_prt.php">Pratique</a></li>
							</ul>
						</li>
					</ul>
							</br> </br> </br>
                    <section id="content">
		                <article>
                            <div class="ajouter">
								    <div class="ajouter4">
								<?php 
												try
									{
									 
									 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
									}
									catch(Exception $e)
									{

									 die('Erreur : '.$e->getMessage());
									}
									$reponse = $bdd->query('SELECT * FROM moniteurs WHERE type_permis = '.$type_permis.'');
												?>	
			                    <form action="add_presence.php" method="POST">
									
			                            <label for="date2"><strong>Date_Leçon : </strong></label> 
		                                <input id="date2" name="date2" type="date"  required="required" />
										
										<label for="nom"><strong>Nom du moniteur :</strong></label>  </br> 
											 <select name="nom" id="nom" >
												<option  value="rien"> Nom du moniteur </option>  
												<?php while ($donnees = $reponse->fetch()){
					                             ?>
												<option  value="<?php echo $donnees['nom_M']; ?>" id="present"><?php echo $donnees['nom_M']; ?></option>   
												<?php } $reponse->closeCursor(); ?>
											</select>
											
										<label for="rq"><strong>Remarque : </strong></label> 
		                                <input id="rq" name="rq" type="text"   />	
							
										<?php 
													try
										{
										 
										 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
										}
										catch(Exception $e)
										{

										 die('Erreur : '.$e->getMessage());
										}
										$reponse = $bdd->query('SELECT * FROM candidats WHERE type_permis= '.$type_permis.' and type_lecon = '.$type_lecon.'');
													?>
																	</br> </br> </br>
                    
		                    
                <table cellspacing='0' > 
	                <tr>
					    <th>Nom</th>
						<th>Prenom</th>
						<th>nombre de présence</th>
						<th>nombre d'absence</th>
						<th>Marquer presence</th>
						
					</tr>
					<?php 
					        $reponse1 = $bdd->query('SELECT COUNT(*) as nbr from candidats WHERE type_permis= '.$type_permis.' and type_lecon = '.$type_lecon.'');
						    $donnees1 = $reponse1->fetch();
					        $i=$donnees1['nbr']; 
					?>
					                <input type="hidden" name="np" value="<?php echo $i;?>">
					
					<?php 
					    while ($donnees = $reponse->fetch() and $i >0){
				    ?>
                    <tr class='even'>
					    <td><?php echo $donnees['nom']; ?></td>
						<td><?php echo $donnees['prenom']; ?></td>
						<?php   
                                    $id = $donnees['identifiant'];						
						            $present = '"present"';
									$reponse2 = $bdd->query('SELECT COUNT(*) as nbre_presence  FROM presence WHERE identifiant= '.$id.' and marquer ='.$present.'');
									 while ($donnees2 = $reponse2->fetch()){
					    ?>
					    <td><?php echo $donnees2['nbre_presence']; ?></td>  
						<?php  } 
						            $absent = '"absent"';
									$reponse2 = $bdd->query('SELECT COUNT(*) as nbre_absence  FROM presence WHERE identifiant= '.$id.' and marquer ='.$absent.'');
									 while ($donnees2 = $reponse2->fetch()){ ?>
						<td><?php echo $donnees2['nbre_absence']; ?></td> <?php  }  ?>
						
						<td><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $donnees['identifiant'];?>">
						<label for="presence<?php echo $i; ?>"> Présent :</label>
						<input type="radio" name="presence<?php echo $i; ?>" id="presence<?php echo $i; ?>" value="present"/>
						<label for="presence<?php echo $i; ?>"> Absent : </label>
						<input type="radio" name="presence<?php echo $i; ?>" id="presence<?php echo $i; ?>" value="absent"/></td>
                        <?php $i--; ?>
					</tr>
					<?php } $reponse->closeCursor(); ?>
				</table>							
										<input type="submit" value="Valider" name="submit"/>
							</form>
									
									
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