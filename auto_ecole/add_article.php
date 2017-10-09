<?php

   try
{
$bdd=new PDO('mysql:host=localhost;dbname=blog','root','');
}
     catch(exception $e) {
      die('erreur');
}

            $titre_article  = $_POST["titre_article"] ;
			$membre_article  = $_POST["membre_article"] ;
			$corps_article  = $_POST["corps_article"] ;
			
		    $corps	= addslashes ($corps_article) ;
			
			$query=$bdd->query("

						 INSERT INTO articles VALUES('','$titre_article','$membre_article','$corps',NOW())

			"); 
			
            header('location:forum.php');
 			
?>