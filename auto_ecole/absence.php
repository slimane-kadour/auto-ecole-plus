<?php   
      session_start();
        if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto école plus | Accueil</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
 
 
 
</head>
          
<body>
                  
					    
  
    <div class="main-box" id="ancre">
                    <section id="espPerso2" class="bloc">
                        <?php if (!isset($_SESSION['connect'])){?>
			            <?php } else{  echo  "<h3>Bonjour  ".$_SESSION['pseudo']."</h3>"; ?>
	                    <a href="deconnexion.php">Déconnexion</a>
				        <?php }?>
					</section>
					
<style>
table {
font-family: Arial, Helvetica, sans-serif;
color: #666;
font-size: 12px;
text-shadow: 1px 1px 0px #fff;
background: #eaebec;
margin-left: -101px;
margin-top: 23px;
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
.milieu table {
margin-left: 0px;
}
</style>					
			
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
			<section id="espPerso3" class="bloc">
                      <h3>Liste des Candidats </h3>
					  <h4> Nom et prenom <span class="droit"></span> </h4> </br>
					  <?php   while ($donnees = $reponse->fetch()){?>
			            
	                   						
						<a href="finance1.php?idPersonne=<?php echo $donnees['identifiant'];?>"><?php echo $donnees['nom']." ".$donnees['prenom'] ; ?></br></a>
						
						<?php } ?>
					</section>
				
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
			                        <div id="apDiv4">
										<p>Nom :</p>
										<p>Prenom :</p>
										<p>N°CNI : </p>
										<p>Type de permis : </p>
										<p>Nombre de cours : </p>
									</div>
										
									<div class="ajouter4">
									
			                        <form action="" method="POST">
									
			                           <label for="lecon"><strong>Type de leçon</strong></label>  </br> 
                                       <select name="lecon" id="lecon" >
												<option  value="rien"> Type de leçon </option>  
												<option  value="pratique" id="pratique"> Pratique </option>   
												<option  value="théorique" id="théorique" > Théorique </option>	
											</select>	
										
										<label for="date2"><strong>Date_Leçon : </strong></label> 
		                                <input id="date2" name="date2" type="date"  required="required" />
										
										<label for="nom">Nom Moniteur : </label>
										<input id="nom" type="text" name="nom">
										
										<label> Marquer présence</label>
										 <input type="radio" name="radio" value="présence" id="radio_0" /> 
										
										
										<table cellspacing='0' > 
	                <tr>
					    <th>Prix à payer</th>
					    <th>Versement</th>
						<th>Date du versement</th>
						<th>Prix restant</th>
						<th>Remarque</th>
					</tr>
					<tr>
					    <td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>	
					</tr>
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