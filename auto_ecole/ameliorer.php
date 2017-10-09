<?php
    
if (isset($_POST['submit2'])){
   
	     $msg =  htmlspecialchars(trim($_POST['msg']));
        
              if ($msg){
			  
			  try
{
$bdd=new PDO('mysql:host=localhost;dbname=ameliorer','root','');
}
     catch(exception $e) {
      die('erreur');
}
$query=$bdd->query("

             INSERT INTO ameliorer_site VALUES('','$msg')

"); 
   header('location:ameliorer2.php');
       
			  
			  }else { echo "Veuillez remplir le champs"; }
			  }



  ?>