<?php
session_start();
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
</head>
<style>
.information {
border : 1px solid black ;
height: 1182px;
}
.principal h2{
font-size: x-large;
}
.principal .carte{
margin-top:74px;
}
.imp {
margin-left: 1268px;
margin-top: -15px;
}
.enregistrer {
margin-left: 1213px;
margin-top: -45px;
}
.add {
margin-left: 1153px;
margin-top: -49px;
}
#apDiv7 {
		position: absolute;
		width: 146px;
		height: 167px;
		z-index: 1;
		left: 103px;
		top: 70px;
		border: 1px solid black;
	   }
	   #apDiv7 p { 
	   margin-top: 68px;
       margin-left: 25px;
	   }
	   #apDiv1 {
		position:absolute;
		width:200px;
		height:115px;
		z-index:1;
		left: 55px;
		top: 296px;
	   }
	    #apDiv1 p{
		color: #909090;
		font-size: large;
		}
	   
	   .apDiv8 {
		position: absolute;
		width: 861px;
		height: 327px;
		z-index: 1;
		left: -92px;
		top: 460px;
		}
		#apDiv7 p {
margin-top: 0px;
margin-left: 0px;
}
		
		.apDiv8 p{
		font-size:large;
		}
		.apDiv9 {
		position: absolute;
		width: 105px;
		height: 50px;
		z-index: 1;
		left: 556px;
		top: 276px;
		}
		.apDiv9 p{
		font-size:large;
		}
#apDiv2 {
position: absolute;
width: 575px;
height: 115px;
z-index: 4;
left: 573px;
top: 304px;
}
#apDiv2 p {
font-size:large;
}
#apptableau {
	position:absolute;
	width:420px;
	height:115px;
	z-index:1;
	left: 254px;
    top: 655px;
}
#apptableau table {
	width: 706px;	
}
.Style1 {color: #FFFFFF}

</style>

      
<body>
                  
					    
  
   
		        
					<div class="information">
					</br> 
             <div class="principal">
                <div class="imp"> 
				    <a href="" onclick="imprimer_page()"><img src="images/images2.jpg"/></a>	
				</div>	
				
					<script type="text/javascript">
					function imprimer_page(){
					  window.print();
					}
					</script>	
				
				
				 
			 <h2 align="center">  لجــمـــهـــوريــة الجزائـــريـــة الديــمــوقـــراطية الشـعـبــية </h2>
			 </br> </br>
			 <h2 align="center" class="carte">  Carte de Versement  </h2>
		  	</div>	
			 <?php                                  
								  if( $result = mysql_fetch_object( $requete ) )
								  {?>
			<div id="apDiv7">
			<p><img src="<?php echo "images/".$result->foto;?>" width="146" height="167"/></p>
			</div>
		                            <div id="apDiv1">
										<p>Nom et Prenom  :</p>
										<p>Numéro d'inscription :</p>
										<p>Date de naissance : </p>
										<p>Adresse : </p>
										<p>N°CNI : </p>
										<p>N°téléphone : </p>
										<p>Type de permis : </p>
										
								    </div>
									<div id="apDiv2">
									<?php
								 $pt =$result->Prix_total;
								 $ver =$result->versement;
								 $pr = $pt - $ver ;
								?>
										<p><?php echo($result->nom)." ".($result->prenom) ; ?></p>
										<p><?php echo($result->num_inscription); ?></p>
										<p><?php echo($result->date_naiss);?> </p>
										<p><?php echo($result->adresse);  ?></p>
										<p><?php echo($result->num_CNI); ?></p>
										<p><?php echo($result->num_telephone); ?> </p>
										<p><?php echo($result->type_permis); ?> </p>
										
										
									</div>
									
									<div id="apptableau">
									  <table width="425" border="1">
										<tr>
										  <th width="123" bgcolor="#333333" scope="col"><span class="Style1">Prix total</span></th>
										  <th width="140" bgcolor="#333333" scope="col"><span class="Style1">Versement</span></th>
										  <th width="140" bgcolor="#333333" scope="col"><span class="Style1">Prix restant</span></th>
										  <th width="140" bgcolor="#333333" scope="col"><span class="Style1">Date du dernier versement</span></th>
										</tr>
										<tr>
										  <td scope="row"><?php echo($result->Prix_total); ?></td>
										  <td><?php echo($result->versement); ?></td>
										  <td><?php echo $pr; ?></td>
										  <td><?php echo($result->Date_versement);?></td>
										</tr>
										<?php 
									} ?>
									  </table>
		               
					<div class="apDiv9">
					<p>Signature : </p>	
                    </div>		
					<div class="apDiv8">
					<p> Cette carte doit être présentée au niveau de l'organisation et de les rendre à tout contrôle de processus</p>	
                    </div>					
		  
	 
           
		 
         
         
		   
          		 

     </div>
	
	 
					
       
           
        
       
 
</body>
</html>

