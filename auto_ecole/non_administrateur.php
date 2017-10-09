
<!DOCTYPE html >
<html>
<head>



<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administration</title>

<!--STYLESHEETS-->
<link href="css/styleD.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<style>
.login-form .header h1 {
font-family: 'Bree Serif', serif;
font-weight: 300;
font-size: 12px;
line-height: 34px;
color: #FF000A;
text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
margin-bottom: 10px;
}
</style>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="connect_administrateur.php" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Nom d'utilisateur ou mot de passe incorect</h1><!--END TITLE-->
   
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" value="Nom d'utilisateur" onfocus="this.value=''" required="required"/><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Mot de passe" onfocus="this.value=''" required="required"/><!--END PASSWORD-->
	
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Valider" class="button" /><!--END LOGIN BUTTON-->
    
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->


</body>
</html>