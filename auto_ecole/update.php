<?php

session_start(); 
if(isset($_POST['submit']))
{
$nom=$_POST['nom'];
$o_password=$_POST['o_password'];
$n_password=$_POST['n_password'];
$r_password=$_POST['r_password'];


     mysql_connect("localhost","root","");
	 mysql_select_db("a_propos");


				
        $update_user=mysql_query("SELECT * FROM candidats WHERE nom='$nom' AND password='$o_password'");
		$update_moniteur=mysql_query("SELECT * FROM moniteurs WHERE nom_M='$nom' AND password='$o_password'");
		$update_admin=mysql_query("SELECT * FROM administration WHERE user='$nom' AND password='$o_password'");
		
		
				$rows1=mysql_num_rows($update_user);
		        $rows2=mysql_num_rows($update_moniteur);
		        $rows3=mysql_num_rows($update_admin);
				
				if($rows1 > 0){ 

				if($n_password!=$r_password){
                                    header("location:password_erreur.php");

                                    } else
									{
									
									  
					mysql_query("UPDATE candidats SET password='$n_password' WHERE nom='$nom'");
					header("location:effectuer1.php");
									}
} else if( $rows2 > 0) {
if($n_password!=$r_password){
                                    header("location:password_erreur.php");

                                    } else
									{
									
									  
					mysql_query("UPDATE moniteurs SET password='$n_password' WHERE nom_M='$nom'");
					header("location:effectuer2.php");
					}

} else if ( $rows3 > 0) {
                         if($n_password!=$r_password){
                                    header("location:password_erreur.php");

                                    } else
									{
									
									  
					mysql_query("UPDATE administration SET password='$n_password' WHERE user='$nom'");
					header("location:effectuer3.php");
					}

}  else { 
header("location:password_erreur2.php");
}

}
?>