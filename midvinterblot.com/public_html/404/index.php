 <?php
 error_reporting(E_ERROR | E_PARSE);
 define("_BBC_PAGE_NAME", "404");  
 define("_BBCLONE_DIR", "../bbclone/");  
 define("COUNTER", _BBCLONE_DIR."mark_page.php");  
 if (is_readable(COUNTER)) include_once(COUNTER);  
 ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>404 - Midvinterblot</title>
	<link rel="icon" 
		  type="image/png" 
		  href="images/favicon.png" />
	<link rel="image_src" href="http://www.midvinterblot.com/images/link.png" />
	<meta name="description" content="The official webpage of the swedish folk-metal band Midvinterblot; however this is the 404 page so there's not much to see here... ?" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
	
	<link rel="stylesheet" type="text/css" href="../css/background.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/backgroundmobile.css" media='screen and (max-width: 600px)' />
	<link rel="stylesheet" type="text/css" href="style.css" media='screen and (max-width: 600px)' />
	<link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
<?php include_once("../analyticstracking.php") ?>
</head>
<body>
<!-- Here be background -->
<div class="master">
	<div class="backgroundTL"></div>
	<div class="backgroundTR"></div>
	<div class="backgroundTM1"></div>
	<div class="backgroundTM2"></div>
	<div class="backgroundTML"></div>
	<div class="backgroundTMR"></div>
	<div class="backgroundML"></div>
	<div class="backgroundBL"></div>
	<div class="backgroundBR"></div>
	<div class="backgroundB"></div>
	<div class="backgroundRun"></div>
	<div class="backgroundGub1"></div>
	
	<div class="varelse1"></div>
	<div class="varelse2"></div>
	<div class="varelse3"></div>
	<div class="varelse4"></div>
<!-- Here be content -->
	<div class="contentContainer">
		<h1>404</h1>
		<div class="fourOfour">
		<a href="http://www.midvinterblot.com"><img src="http://i.imgur.com/T30jF5x.png" alt="404" /></a>
		</div>
	</div>
</div>
</body>
</html>