<?php
    
if (isset($_POST['submit'])){
   
	     $msg =  htmlspecialchars(trim($_POST['msg']));
        
              if ($msg){
			  
			  try
{
$bdd=new PDO('mysql:host=localhost;dbname=a_propos','root','');
}
     catch(exception $e) {
      die('erreur');
}
$query=$bdd->query("

             INSERT INTO candidats VALUES('','','','','','','','','','','','','','','','','','','','','$titre','$le_message')

"); 
   header('location:ameliorer2.php');
       
			  
			  }else { echo "Veuillez remplir le champs"; }
			  }



  ?>