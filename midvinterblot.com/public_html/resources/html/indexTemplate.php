<?php
//$page_title        page title.
//$page_description  page description.
//$page_image   the link image.
//$disable_hammer   1 for disabling it.
//$disable_links    1 for disabling them.
//$page_content content.
//$mailbox_title    text for the contact box
//$res_folder       relative location of the resources folder;
//$extra_css        do you need some more css?

if(!$res_folder){
    echo "ERROR";
}



//lets set some standard fallback values
if (!$page_title) {
    $page_title = "Midvinterblot";
}
if (!$page_description) {
    $description = "The official webpage of the swedish folk-metal band Midvinterblot";
}
if (!$page_image) {
    $page_image = "http://www.midvinterblot.com/resources/images/link.png";
}
if (!$mailbox_title) {
    $mailbox_title = "Contact Midvinterblot by e-mail using this form";
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $page_title; ?></title>
	<link rel="icon" type="image/png" href="http://www.midvinterblot.com/resources/images/favicon.png" />
        <link rel="image_src" href="<?php echo $page_image; ?>" />


	<meta name="Title" content="<?php echo $page_title; ?>"/>
	<meta property="og:title" content="<?php echo $page_title; ?>"/>
	<meta name="description" content="<?php echo $page_description; ?>" />
	<meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta property="og:image" content="<?php echo $page_image; ?>" />

	
	<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=2.0, user-scalable=yes" /> 
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $res_folder; ?>css/background.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $res_folder; ?>css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $res_folder; ?>css/stylesmall.css" media='screen and (max-width: 1205px)' />
	<link rel="stylesheet" type="text/css" href="<?php echo $res_folder; ?>css/backgroundmobile.css" media='screen and (max-width: 650px)' />
	<link rel="stylesheet" type="text/css" href="<?php echo $res_folder; ?>css/stylemobile.css" media='screen and (max-width: 650px)' />
	<link rel="stylesheet" type="text/css" href="<?php echo $res_folder; ?>css/print.css" media="print" />
        <?php echo $extra_css; ?>
        
        <!-- Contact Box -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $res_folder; ?>fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $res_folder; ?>fancybox/jquery.fancybox.js?v=2.0.6"></script>
	
	
<?php include $res_folder . 'analyticstracking.php'; ?>
 
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
	<div class="backgroundGub1"><a href="https://www.youtube.com/watch?v=SEBLt6Kd9EY" class="backgroundGub1link"><img src="<?php echo $res_folder; ?>images/1x1trans.png" alt="Easter egg!"  width="135" height="148" /></a></div>
<!-- Here be content -->
	<h1>Midvinterblot</h1>
	<div class="contentContainer" itemscope itemtype="http://schema.org/MusicGroup">
		<h1 class="hidden" itemprop="name">Midvinterblot</h1>
		<div class="hidden" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<span class="hidden" itemprop="addressCountry">Sweden</span>
			<span class="hidden" itemprop="addressRegion">Stockholm</span>
		</div>
		<div class="navbar">
			<object id="svg1" data="/resources/images/orm2.svg" type="image/svg+xml"></object>
		</div>
                <?php
                    if($disable_hammer != 1)
                    echo '<div class="logo"></div>';
                    
                    if($disable_links != 1){ ?>
		<div class="links" itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint">
			<!-- Here be links -->
			<h1>Links to the official Midvinterblot band music/news sources and means of contact</h1>
			<a href="http://www.facebook.com/pages/Midvinterblot/159428540760626"
			  title="Facebook" target="_blank" itemprop="url">
				<img src="<?php echo $res_folder; ?>images/icons/facebook.png" alt="Midvinterblot on Facebook" width="59" height="59"/>
			</a>

			<a href="http://www.youtube.com/user/Midvinterblotband/"
			  title="Youtube" target="_blank" itemprop="url">
				<img src="<?php echo $res_folder; ?>images/icons/youtube.png" alt="Midvinterblot on Youtube" width="59" height="59"/>
			</a>
			
			<a href="http://www.twitter.com/midvinterblot"
			  title="Twitter" target="_blank" itemprop="url">
				<img src="<?php echo $res_folder; ?>images/icons/twitter.png" alt="Midvinterblot on Twitter" width="59" height="59"/>
			</a>
			
			<a href="/merch" title="Merch">
				<img src="<?php echo $res_folder; ?>images/icons/merch.png" alt="merch" width="59" height="59"/>
			</a>
			
			<a href="http://www.metal-archives.com/bands/Midvinterblot/3540356739"
			  title="Encyclopedia Metallum" target="_blank" itemprop="url">
				<img src="<?php echo $res_folder; ?>images/icons/mchives.png" alt="Midvinterblot on Encyclopaedia Metallum" width="59" height="59"/>
			</a>
			<a class="button modalbox" href="#inline" itemprop="email">
				<img src="<?php echo $res_folder; ?>images/icons/mail.png" alt="Contact Midvinterblot By Mail" width="59" height="59"/>
			</a>
		</div>
                    <?php } ?>
		<!-- Contact Box -->
		<div id="inline">
			<form id="contact" name="contact" action="#" method="post">
				<fieldset>
				<legend><?php echo $mailbox_title; ?></legend>

				<label for="email"><span class="required">*</span> Your Email Address</label>
				<input name="email" type="email" id="email" class="txt" />
				
				<br />
				<label for="subject"><span class="required">*</span> Message Subject</label>
				<input name="subject" type="text" id="subject" class="txt"/>

				<br />
				<label for="msg"><span class="required">*</span> Your Message</label>
				<textarea name="msg" id="msg"></textarea>

				<input id="send" class="button" type="image" src="<?php echo $res_folder; ?>images/icons/sendmail.png" alt="send message" name="send email" width="124" height="39">
				</fieldset>
			</form>
		</div>
		<!-- Other Content -->
		<div class="content">
                    <?php echo $page_content ?>
		</div>
		<a class="hidden" href="https://plus.google.com/u/0/b/109455481729744341165/109455481729744341165" >Google Plus</a>
	</div>
</div>
<!-- Contact Box -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- Linktracking -->
<script type="text/javascript" src="<?php echo $res_folder; ?>js/tracklink.js"></script>

</body>
</html>
