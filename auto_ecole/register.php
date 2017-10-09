<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto-Ecole Plus| A propos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <link rel="stylesheet" href="css/960.css" />
  
</head>

<body>
  <!-- header -->
 <header>
    <div class="container">
    	<h1><a href="index.html">Auto-Ecole Plus</a></h1>
      <nav>
        <ul>
        	<li><a href="accueil.php" >Accueil</a></li>
          <li><a href="inscription.php#ancre">Inscription</a></li>
          <li><a href="a propos.php#ancre" class="current">A propos</a></li>
          <li><a href="gallerie.php#ancre">Gallerie</a></li>
          <li><a href="contacts.php#ancre">Contacts</a></li>
		  <li><a href="forum.php#ancre">Forum</a></li>
        </ul>
      </nav>
	  
    </div>
	</header>
  <!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><img src="images/slide3.jpg" alt=""></li>
        <li><img src="images/slide2.jpg" alt=""></li>
        <li><img src="images/slide5.jpg" alt=""></li>
        <li><img src="images/slide1.jpg" alt=""></li>
        <li><img src="images/slide4.jpg" alt=""></li>
      </ul>
  	</div>
  </section>

  <!-- /#gallery -->
  <div class="main-box" id="ancre">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
    <?php
if(isset($_POST['submit']))
{
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
	
     if ($username&&$password&&$repeatpassword)
     {
              if(strlen($username)>=4)
                 {
                      if(strlen($password)>=6)
                             {

                              if($password==$repeatpassword)
                                    {

$password=md5($password);
mysql_connect('localhost','root','');
mysql_select_db('phpmembre');
$query=mysql_query("

INSERT INTO users VALUES('','$username','$password')

"); die('inscription terminee,vous pouvez vous <a href="login.php">connecter</a>');


}else echo "les mots de passe ne sont pas identiques!";

}else echo "le mot de passe est trop court!";

}else echo"le nom d utilisateur est trop court!";


}else echo"veuller saisir tous les champs!";
 }
?>
<h2>Inscription</h2>
<form method="post" action="register.php">
<p>Votre nom d'utilisateur</br>
<input type="text" name="username"/></p>
<p>Votre mot de passe</br>
<input type="password" name="password"/></p>
<p>Repeter votre mot de passe
<input type="password" name="repeatpassword"/></p>
<input type="submit" name="submit" value="valider"/>
</form>
<a href="login.php">Je possède déja un compte<a/>
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>About <span>Your Team</span></h2>
              <!-- .team-list -->
              <ul class="team-list">
              	<li>
                	<figure><img src="images/img2.jpg" alt=""></figure>
                  <h3><a href="#">Team Member One</a></h3>
                  He is the most important member of your team. Usually this is the person who started the website. Maybe it is worth to write why he has made such a decision and what has inspired him <a href="#">...</a>
                </li>
                <li>
                	<figure><img src="images/img3.jpg" alt=""></figure>
                  <h3><a href="#">Another Team Member</a></h3>
                  We are completly lost on what he's responsible for, but we hope that you know it. We also hope that you will tell it to the rest of the world including us by placing some real text here <a href="#">...</a>
                </li>
                <li>
                	<figure><img src="images/img4.jpg" alt=""></figure>
                  <h3><a href="#">Another Team Member</a></h3>
                  We are completly lost on what he's responsible for, but we hope that you know it. We also hope that you will tell it to the rest of the world including us by placing some real text here <a href="#">...</a>
                </li>
              </ul>
              <!-- /.team-list -->
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
   <?php include("include/footer.php"); ?>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
