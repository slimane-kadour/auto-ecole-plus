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
 <style>
.couleur{
color:green;
font-size: x-large;
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
table {
font-family: Arial, Helvetica, sans-serif;
color: #666;
font-size: 12px;
text-shadow: 1px 1px 0px #fff;
background: #eaebec;
margin-left: 143px;
border: #ccc 1px solid;
-webkit-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0 1px 2px #d1d1d1;
box-shadow: 0 1px 2px #d1d1d1;
margin-top: 178px;
margin-bottom: 63px;
}
#content {
float: left;
width: 572px;
margin-bottom: 300px;
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
			<section id="espPerso3" class="bloc">
                      <h3>Liste des Candidats </h3>
					  <h4> Nom et prenom <span class="droit"></span> </h4> </br>
					  <?php   while ($donnees = $reponse->fetch()){?>
			            
	                   						
						<a href="presence1.php?idPersonne=<?php echo $donnees['identifiant'];?>"><?php echo $donnees['nom']." ".$donnees['prenom'] ; ?></br></a>
						
						<?php } ?>
					</section>
					
			
			    <div class="wrapper2">
				
				   <!-- Menu Direction  -->
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
								
                                     <p class="couleur" align="center">Marquer </p>  </hr> 
                                <div id="apDiv4">
									 <?php                                  
								  if( $result = mysql_fetch_object( $requete ) )
								  {
								 $nom =$result->nom;
								 $prenom =$result->prenom;
								 $num_CNI =$result->num_CNI;
								 $type_permis =$result->type_permis;
								 
								
								 
								  ?>
								       
										<p>Nom :   <?php echo($result->nom) ;?></p>
										<p>Prenom :<?php echo($result->prenom) ;?></p>
										<p>N°CNI :<?php echo($result->num_CNI) ;?> </p>
										<p>Type de permis :<?php echo($result->type_permis) ;?> </p>
										
								</div>
									</br> </br>
									<?php 
									}
									
									$present = '"present"';
									$reponse = $bdd->query('SELECT COUNT(*) as nbre_presence  FROM presence WHERE identifiant= '.$id.' and marquer ='.$present.'');
									 while ($donnees = $reponse->fetch()){
					?>
									   
									<table cellspacing='0' > 
	                <tr>
					    <th>Nombre de présence</th>
						<th>Nombre d'absence</th>
					</tr>
					<tr>
					    <td><?php echo $donnees['nbre_presence']; ?></td>  <?php  } 
						
						            $absent = '"absent"';
									$reponse = $bdd->query('SELECT COUNT(*) as nbre_absence  FROM presence WHERE identifiant= '.$id.' and marquer ='.$absent.'');
									 while ($donnees = $reponse->fetch()){ ?>
					    <td><?php echo $donnees['nbre_absence']; ?></td>  <?php  }  ?>
						
					</tr>
					
		                     </table>    
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