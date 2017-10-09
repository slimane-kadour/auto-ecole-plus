<?php   
      session_start();
        if(isset($_SESSION['admin'])){

		 $idP  = $_GET["idPermis"] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Accueil</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
 
 <style>
table {
font-family: Arial, Helvetica, sans-serif;
color: #666;
font-size: 12px;
text-shadow: 1px 1px 0px #fff;
background: #eaebec;
margin-left: -65px;
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
width: 725px;
padding-bottom: 26px;
}
.ajouter4 form {
width: 355px;
margin: auto;
margin-top: 16px;
}
</style>					

 
</head>
          
<body>
                  
					    
  
    <div class="main-box" id="ancre">
                    <section id="espPerso2" class="bloc">
                        <?php if (!isset($_SESSION['connect'])){?>
			            <?php } else{  echo  "<h3>Bonjour  ".$_SESSION['pseudo']."</h3>"; ?>
	                    <a href="deconnexion.php">Déconnexion</a>
				        <?php }?>
					</section>
					
			
        <div class="container3">
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
			 <!--    <section id="espPerso3" class="bloc">
                      <h3>Liste des Candidats </h3>
					  <h4> Nom et prenom <span class="droit"></span> </h4> </br>
					    <a href="presence1.php"> Permis B</br></a>
						<a href="presence1.php"> Permis AAC</br></a>
						<a href="presence1.php"> Permis E(B)</br></a>
						<a href="presence1.php"> Handi'conduite</br></a>
					</section>
				-->
				<?php 
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM permis');
		  
					?>
				<ul id="menud">
				<?php   while ($donnees = $reponse->fetch()){?>
					    <li><a href="#"><?php echo $donnees['Nom_Permis'] ; ?></a>
						<ul>
                                <li><a href="theorique.php?idPermis=<?php echo $donnees['idP'] ; ?>">Théorique</a></li>
								<li><a href="pratique.php?type_permis=<?php echo $donnees['idP'] ; ?>">pratique</a></li>
						</ul>
						</li>
						
						<?php } ?>
				 </ul>
			    <div class="wrapper2">
				
				 <!-- Menu Direction -->
		              <?php include("include/menu_direction.php"); ?>
					  <!-- Partie Recherche -->
					<form action="recherche_presence.php" method="post" class="formulaire2">
                                <input type="text" name="search" placeholder="Chercher un candidat" class="champ"/>
                                <input type="submit"   class="butt"  value="Ok" />
                    </form>
							</br> </br> </br>
                    <section id="content">
		                    
						 <article>

						    <div class="ajouter">
								  <!-- Formulaire de direction pour ajouter un candidat -->
			                        
										
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
$reponse = $bdd->query('SELECT * FROM moniteurs');
			?>	
			                        <form action="" method="POST">
									
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
		                                <input id="rq" name="rq" type="text"  required="required" />	
							
<?php 
			try
{
 
 $bdd = new PDO('mysql:host=localhost;dbname=a_propos', 'root', '');
}
catch(Exception $e)
{

 die('Erreur : '.$e->getMessage());
}
$present = '"theorique"';

$reponse = $bdd->query('SELECT * FROM candidats WHERE type_permis= '.$type_permis.' and type_lecon = '.$present.'');
			?>
							</br> </br> </br>
                    
		                    
                        <table cellspacing='0' > 
	                <tr>
					    <th>Nom</th>
						<th>Prenom</th>
						<th>Type_de_permis</th>
						<th>nombre de présence</th>
						<th>nombre d'absence</th>
						
					</tr>
					<?php while ($donnees = $reponse->fetch()){
					?>
                    <tr class='even'>
					    <td><?php echo $donnees['nom']; ?></td>
						<td><?php echo $donnees['prenom']; ?></td>
						<td><?php echo $donnees['type_permis'];   ?></td>
						<td><?php echo $donnees['type_permis'];   ?></td>
						<td><?php echo $donnees['type_permis'];   ?></td>
						
					</tr>
					<?php } $reponse->closeCursor(); ?>
				</table>							
										<input type="submit" value="Ajouter" name="submit"/>
									</form>
									
									
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