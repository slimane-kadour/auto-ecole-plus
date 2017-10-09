<?php
session_start();
if(isset($_SESSION['pseudo']))
{
 $id  = $_GET["idPersonne"] ;  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto-Ecole Plus| Espace_Candidats</title>
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
   <!-- gallerie -->
  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/coin-slider.min.js"></script>
 <link type='text/css' href='YUI/2.8.2r1/build/calendar/assets/skins/sam/calendar.css' rel='stylesheet'/>
<script type='text/javascript' src='YUI/2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js'></script>
<script type='text/javascript' src='YUI/2.8.2r1/build/calendar/calendar-min.js'></script>
<style type="text/css">
/* CALENDAR BOUNDING BOX */ 
.yui-skin-sam #OAWidget { 
	background-color:#f2f2f2; 
	border:1px solid #808080; 
	padding:10px;
	margin-top:-250px;
} 

/* TITLE BAR */
.yui-skin-sam #OAWidget .title {
	border-bottom:1px solid #cccccc;
	color:#000000;
}

/* WEEKDAY HEADER ROW */
.yui-skin-sam #OAWidget .calweekdayrow {
	height:2em;
}

/* WEEKDAY (Su, Mo, Tu...) HEADER CELLS */
.yui-skin-sam #OAWidget .calweekdaycell {
	color:#000000;
	font-weight:bold;
}

/* WEEK NUMBERS (ROW HEADERS/FOOTERS) */
.yui-skin-sam #OAWidget .calrowhead, .yui-skin-sam .yui-calendar .calrowfoot {
	color:#a6a6a6;
	font-size:85%;
	font-style:normal;
	font-weight:normal;
}

/* NORMAL CELLS */
.yui-skin-sam #OAWidget td.calcell {
	border:1px solid #cccccc;
	background:#ffffff;
	height:1.6em;
	line-height:1.6em; /* set line height equal to cell height to center vertically */
}

/* LINK INSIDE NORMAL CELLS */
.yui-skin-sam #OAWidget td.calcell a {
	color:#0066cc;
}

/* TODAY'S DATE */
.yui-skin-sam #OAWidget td.calcell.today { 
	background-color:#f2f2f2; 
} 
.yui-skin-sam #OAWidget td.calcell.today a {
	background-color:#ffffff;
}

/* SELECTED DATE */
.yui-skin-sam #OAWidget td.calcell.selected a {
	background-color:#0066cc;
	color:#000000;
}

/* HOVER DATE */
.yui-skin-sam #OAWidget td.calcell.calcellhover a {
	background-color:#426fd9;
	color:#ffffff;
}

/* CalendarNavigator */
/* NAVIGATOR MASK */
.yui-skin-sam #OAWidget .yui-cal-nav-mask {
	background-color:#000000;
	opacity:0.25;
	*filter:alpha(opacity=25); /* IE */
}

/* NAVIGATOR BOUNDING BOX */
.yui-skin-sam #OAWidget .yui-cal-nav {
	border:1px solid #808080;
	background-color:#f2f2f2;
}
.milieu3 table {
margin-left:283px;
margin-top:2px;
}
</style>

</head>

<body>

			                    <!-- header -->
									<header>
										<div class="container2">
											<h1><a href="accueil.php">Auto-Ecole Plus</a>
											  <p> <strong>Adresse</strong> : Avenue Aspt Hammou Mokhtar 31000, Oran , Algérie.</p>
											</h1>
											<nav>
												<ul>
													<li><a href="accueil.php" class="current">Accueil</a></li>
													<li><a href="inscription.php#ancre">Admission</a></li>
													<li><a href="a propos.php#ancre">A propos</a></li>
													<li><a href="gallerie.php#ancre">Gallerie</a> </li>
													<li><a href="contacts.php#ancre">Contacts</a></li>
													<li><a href="accueil2.php#ancre">Forum</a></li>
												</ul>
											</nav>
										</div>
									</header>
							    <!-- #gallery -->
							        <section id="gallery">
								        <div id="coin-slider"> 
											<a href="#"><img src="images/image3.jpg" width="1000" height="250" alt="" /></a> 
											<a href="#"><img src="images/image1.jpg" width="1000" height="250" alt="" /></a>
											<a href="#"><img src="images/image2.jpg" width="1000" height="250" alt="" /></a> 
								        </div>
							        </section> 
 
  <div class="main-box" id="ancre">
                    <section id="espPerso" class="bloc">
                        <?php if (!isset($_SESSION['connect'])){?>
			            <?php } else{  echo  "<h3>Bonjour  ".$_SESSION['pseudo']."</h3>"; ?>
	                    <a href="deconnexion.php">Déconnexion</a>
				        <?php }?>
					</section>
					
        <div class="container">
	        <div class="inside">
			    <ul id="menud">
                        <li><a href="coordone.php?idPersonne=<?php echo  $id ; ?>">Coordonnés</a></li>
						<li><a href="examen-resultat.php">Examens </a></li>
                        <li><a href="message_candidats.php?idPersonne=<?php echo  $id ; ?>">Message</a></li>
				</ul> </br> </br>
	  	        <div class="wrapper">
                    <section id="content">
		                <article>
			
		  <div class="fiche">
		  
         <h2 align="center" >  Résultat d'examen du candidat :  </h2>  <hr/> 
		 <p align="center">  Vous avez passer l'épreuve du code le : 31/01/2014 ==> échouer </p>
		  <p align="center">  Vous avez passer l'épreuve du code le : 15/01/2014 ==> Obtenu </p>
		  <p align="center">  Vous avez passer l'épreuve de créneaux le : 20/02/2014 ==> Obtenu </p>
		  </div>
		 </br> </br>
		 <div class="milieu3">
				<table cellspacing='0' > 
	                <tr>
					    <th  colspan="3">Candidats concernées</th>
					</tr>
                    <tr>
					    <td>Nom</td>
						<td>Prénom</td>
					</tr>
					<tr>
					    <td>Boudaoud</td>
						<td>Prénom</td>
					</tr>
					<tr>
					    <td>Nom</td>
						<td>Prénom</td>
					</tr>
					<tr>
					    <td>Nom</td>
						<td>Prénom</td>
					</tr>
				</table>
				     </div>
<div id="OAWidget"></div>
<script type="text/javascript">
document.body.className += " yui-skin-sam";
YAHOO.namespace("widget.Calendar");

YAHOO.init_OAWidget = function() {
  var oCalendar_OAWidget = new YAHOO.widget.Calendar("oCalendar_OAWidget","OAWidget", 
       {selected: "04/27/2014",
        mindate: null,
  			maxdate: null,
  			title: "Prochain Examen",
        close: false,
  			iframe: true,
  			multi_select: false,
  			navigator: false,
  			show_weekdays: true,
        locale_weekdays: "short",
  			start_weekday: 0,
  			show_week_header: false,
  			show_week_footer: false,
  			hide_blank_weeks: false }
  );
  oCalendar_OAWidget.render();
}
YAHOO.util.Event.onDOMReady(YAHOO.init_OAWidget);
</script> </br> </br>

		  
	                    </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
        <!-- footer -->
            <?php include("include/footer.php"); ?>
        
        <?php    }    else    {      header("location:accueil.php?page_introuvable");}    ?>  <!--Nom d'utilisateur ou mot de passe incorect -->
 
</body>
</html>
  
  
  
  
  
  
  
  
   