 <?php  

session_start();   
 
if(!empty($_POST['pseudo']) && !empty($_POST['password']))
	{
	
		$pseudo=htmlspecialchars($_POST['pseudo']);
		$password=htmlspecialchars($_POST['password']);
		
		mysql_connect('localhost','root','');
		mysql_select_db('a_propos');
		
		$login_user=mysql_query("SELECT * FROM candidats WHERE nom='$pseudo' AND password='$password' AND admin='0'");
		$login_moniteur=mysql_query("SELECT * FROM moniteurs WHERE nom_M='$pseudo' AND password='$password' AND admin='0'");
		
		
		$rows1=mysql_num_rows($login_user);
		
		$rows3=mysql_num_rows($login_moniteur);
		
		
		if($rows1 > 0){ 
		
			
			$_SESSION['pseudo']=$pseudo;  
			$_SESSION['connect']='1';  
			 while($rows = mysql_fetch_array($login_user)){
												 $_SESSION['identifiant']=$rows['identifiant'];
												  }
											 
			header("location:coordone.php#ancre");
			}   
			
			else if  ($rows3 > 0){
		$_SESSION['pseudo']=$pseudo;  
		$_SESSION['connect']='1';
       while($rows = mysql_fetch_array($login_moniteur)){
												 $_SESSION['idm']=$rows['idM'];
												  }	
                header("location:moniteurs.php#ancre");												  
		}
			
		else header("location:fausse_info.php"); 		
		
	}	
	
  else{

	header("location:index.php?Votre_formulaire_est_vide");

}

?>