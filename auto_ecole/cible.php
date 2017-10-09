<?php
session_start();
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
		margin-top: 0px;
		margin-left: 0px;
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
		height: 167px;
		z-index: 1;
	    left: 67px;
		top: 1120px;
		}
		
		
		.apDiv8 p{
		font-size:large;
		}
		.apDiv9 {
		position: absolute;
		width: 105px;
		height: 50px;
		z-index: 1;
		left: 974px;
		top: 743px;
		}
		.apDiv9 p{
		font-size:large;
		}
#apDiv2 {
position: absolute;
width: 575px;
height: 115px;
z-index: 2;
left: 573px;
top: 302px;
}
#apDiv2 p {
font-size:large;
}
</style>      
<body>
                  
					    
  
   
		        
					<div class="information">
					</br> 
             <div class="principal">
                <div class="imp"> 
				    <a href="" onclick="imprimer_page()"><img src="images/images2.jpg"/></a>	
				</div>	
				<div class="enregistrer">  
				    <a href=""  onclick="imprimer_page()"><img src="images/133765IconeEnregistrer.jpg" /></a>	
				</div>
					<script type="text/javascript">
					function imprimer_page(){
					  window.print();
					}
					</script>	
				
				<div class="add">  
				    <a href="candidat.php"><img src="images/imgres.jpg" width="51" height="44"/></a>	
				</div>
				 
			 <h2 align="center">  لجــمـــهـــوريــة الجزائـــريـــة الديــمــوقـــراطية الشـعـبــية </h2>
			 <h2 align="center">  AUTO ECOLE  PLUS </h2>
			
			 <h2 align="center" class="carte">  Carte du candidat  </h2>
		  	</div>	
			<div id="apDiv7">
			<p><img src="<?php echo "images/".$_SESSION['$h'];?>" width="146" height="167"/></p>
			</div>
		                            <div id="apDiv1">
										<p>Nom et Prenom  :</p>
										<p>Numéro d'inscription :</p>
										<p>Date de naissance : </p>
										<p>Adresse : </p>
										<p>N°CNI : </p>
										<p>N°téléphone : </p>
										<p>Type de permis : </p>
										<p>Date de l'entrée en formation : </p>
								    </div>
									<div id="apDiv2">
										<p><?php echo $_SESSION['$nom']." ".$_SESSION['$prenom']; ?></p>
										<p><?php echo $_SESSION['$num']; ?></p>
										<p><?php echo$_SESSION['$dat']; ?> </p>
										<p><?php echo $_SESSION['$adresse'];  ?></p>
										<p><?php echo $_SESSION['$cni']; ?></p>
										<p><?php echo $_SESSION['$tele']; ?> </p>
										<p><?php echo $_SESSION['$permis']; ?> </p>
										<p><?php echo $_SESSION['$date3']; ?> </p>
										
									</div>
		                </br> </br>
					<div class="apDiv9">
					<p>Signature : </p>	
                    </div>		
					<div class="apDiv8">
					<p> Cette carte doit être présentée au niveau de l'organisation et de les rendre à tout contrôle de processus</p>	
                    </div>					
		  
	 
           
		 
         
         
		   
          		 
<!--<form>
  <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
</form>
-->
<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>	

     </div>
	
	 
					
       
           
        
       
 
</body>
</html>

