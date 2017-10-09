<?php  

session_start();   
 
if(!empty($_POST['username']) && !empty($_POST['password']))
	{
	
		$pseudo=htmlspecialchars($_POST['username']);
		$password=htmlspecialchars($_POST['password']);
		
		mysql_connect('localhost','root','');
		mysql_select_db('a_propos');
		
		$login_admin=mysql_query("SELECT * FROM Administration WHERE user='$pseudo' AND password='$password' AND admin='1'");
		
		
		$rows2=mysql_num_rows($login_admin);
		
		if ($rows2 > 0){
		
			$_SESSION['pseudo']=$pseudo;  
			$_SESSION['connect']='1';   
			$_SESSION['admin']='admin';  
			header('location:candidat.php'); 
		
		}
			
		else{ header("location:non_administrateur.php"); }		
		
	}	
	
else{

	header("location:index.php?Votre_formulaire_est_vide");

}

?>