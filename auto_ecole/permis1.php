<?php
session_start();

if(isset($_SESSION['pseudo']))
{  ?>

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
  <link type='text/css' href='YUI/2.8.2r1/build/calendar/assets/skins/sam/calendar.css' rel='stylesheet'/>
<script type='text/javascript' src='YUI/2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js'></script>
<script type='text/javascript' src='YUI/2.8.2r1/build/calendar/calendar-min.js'></script>
<style type="text/css">
/* CALENDAR BOUNDING BOX */ 
.yui-skin-sam #OAWidget { 
	background-color:#0099ff; 
	border:1px solid #003366; 
	padding:10px;
	margin-left:113px;
} 

/* TITLE BAR */
.yui-skin-sam #OAWidget .title {
	border-bottom:1px solid #000000;
	color:#000000;
}

/* WEEKDAY HEADER ROW */
.yui-skin-sam #OAWidget .calweekdayrow {
	height:2em;
}

/* WEEKDAY (Su, Mo, Tu...) HEADER CELLS */
.yui-skin-sam #OAWidget .calweekdaycell {
	color:#000000;
	font-weight:normal;
}

/* WEEK NUMBERS (ROW HEADERS/FOOTERS) */
.yui-skin-sam #OAWidget .calrowhead, .yui-skin-sam .yui-calendar .calrowfoot {
	color:#0000cc;
	font-size:85%;
	font-style:normal;
	font-weight:normal;
}

/* NORMAL CELLS */
.yui-skin-sam #OAWidget td.calcell {
	border:1px solid #000066;
	background:#eeeeee;
	height:1.6em;
	line-height:1.6em; /* set line height equal to cell height to center vertically */
}

/* LINK INSIDE NORMAL CELLS */
.yui-skin-sam #OAWidget td.calcell a {
	color:#003366;
}

/* TODAY'S DATE */
.yui-skin-sam #OAWidget td.calcell.today { 
	background-color:#cccccc; 
} 
.yui-skin-sam #OAWidget td.calcell.today a {
	background-color:#eeeeee;
}

/* SELECTED DATE */
.yui-skin-sam #OAWidget td.calcell.selected a {
	background-color:#000099;
	color:#cccccc;
}

/* HOVER DATE */
.yui-skin-sam #OAWidget td.calcell.calcellhover a {
	background-color:#ff6600;
	color:#000066;
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
</style>
  
</head>

<body>
  <!-- header -->
 <header>
    <div class="container">
    	<<h1><a href="index.html">Auto-Ecole Plus</a>
		  <p> <strong>Adresse</strong> : Avenue Aspt Hammou Mokhtar 31000, Oran , Algérie.</p></h1>
     <nav>
	     <ul>
           <li><a href="accueil.php">Accueil</a></li>
           <li><a href="inscription.php#ancre">Inscription</a></li>
           <li><a href="a propos.php#ancre">A propos</a></li>
           <li><a href="gallerie.php#ancre">Gallerie</a> </li>
           <li><a href="contacts.php#ancre">Contacts</a></li>
           <li><a href="forum.php#ancre">Forum</a></li>
         </ul>
     </nav>
	 <div id="connect_panel">  <?php echo  "<p>Bonjour  ".$_SESSION['pseudo']."</p>"; ?>  </br>
                  </div>   <a href="deconnexion.php"> Déconnexion </a>	 
					 <?php } else{  header('location:accueil.php');   }  ?>
    </div>
	</header>
  <!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><img src="images/image1.jpg" alt=""></li>
        <li><img src="images/image2.jpg" alt=""></li>
        <li><img src="images/image3.jpg" alt=""></li>
        <li><img src="images/image4.jpg" alt=""></li>
        <li><img src="images/image5.jpg" alt=""></li>
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        
<div id="OAWidget"></div>
<script type="text/javascript">
document.body.className += " yui-skin-sam";
YAHOO.namespace("widget.Calendar");

YAHOO.init_OAWidget = function() {
  var oCalendar_OAWidget = new YAHOO.widget.Calendar("oCalendar_OAWidget","OAWidget", 
       {selected: "05/18/2014",
        mindate: null,
  			maxdate: null,
  			title: "Premier_examen_du_mois",
        close: false,
  			iframe: true,
  			multi_select: false,
  			navigator: false,
  			show_weekdays: true,
        locale_weekdays: "short",
  			start_weekday: 0,
  			show_week_header: false,
  			show_week_footer: false,
  			hide_blank_weeks: true }
  );
  oCalendar_OAWidget.render();
}
YAHOO.util.Event.onDOMReady(YAHOO.init_OAWidget);
</script>
 
 <div class="examen">
<table>
  <tr>
    <td>Code</td>
    <td>Créneaux</td>
    <td>Circuit</td>
  </tr>
  <tr>
    <td>Boudaoud wafaa </td>
    <td>Boudaoud wafaa </td>
    <td>Boudaoud wafaa </td>
  </tr>
   <tr>
    <td>kaddour ahmed slimane</td>
    <td>kaddour ahmed slimane </td>
    <td>kaddour ahmed slimane</td>
  </tr>
</table>
</br>  </br>
         <div class="fiche">
         <h3 align="center" >  Fiche renseignement </h3>
		  <p align="center">  Nom : Boudaoud  </p>
		  <p align="center">  Prenom : Wafaa </p>
		  <p align="center">  Date de naissance : 19/03/1993  </p>
		  <p align="center">  Adresse : 9 Rue des 8 Metre coop-el-nasr point du jour  </p>
		 </div>
		 

           </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
   <?php include("include/footer.php"); ?>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>