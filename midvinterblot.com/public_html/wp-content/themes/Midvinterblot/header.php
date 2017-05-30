<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );

	?></title>
<link rel="icon" type="image/png" href="http://www.midvinterblot.com/resources/images/favicon.png" />
<meta name="Title" content="Midvinterblot"/>
<meta property="og:title" content="Midvinterblot"/>
<meta name="description" content="The official webpage of the swedish folk-metal band Midvinterblot" />
<meta property="og:description" content="The official webpage of the swedish folk-metal band Midvinterblot" />
<?php if (is_single()): ?>
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
<link rel="image_src" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
<?php else: ?>
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.midvinterblot.com/resources/images/link.png" />
<link rel="image_src" href="http://www.midvinterblot.com/resources/images/link.png" />
	<?php endif; ?>
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	
?>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/resources/css/background.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/resources/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/resources/css/stylesmall.css" media='screen and (max-width: 1205px)' />
	<link rel="stylesheet" type="text/css" href="/resources/css/stylesmaller.css" media='screen and (max-width: 999px)' />
	<link rel="stylesheet" type="text/css" href="/resources/css/backgroundmobile.css" media='screen and (max-width: 650px)' />
	<link rel="stylesheet" type="text/css" href="/resources/css/stylemobile.css" media='screen and (max-width: 650px)' />
	<link rel="stylesheet" type="text/css" href="/resources/css/print.css" media="print" />
	
	<!-- Contact Box -->
	<link rel="stylesheet" type="text/css" media="all" href="/resources/fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="/resources/fancybox/jquery.fancybox.js?v=2.0.6"></script>
	
	

</head>

<body <?php body_class(); ?>>
<!-- google -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39947911-1', 'auto');
  ga('send', 'pageview');

</script>

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
	<div class="backgroundGub1"><a href="https://www.youtube.com/watch?v=SEBLt6Kd9EY" class="backgroundGub1link"><img src="/resources/images/1x1trans.png" alt="Easter egg!"  width="135" height="148" /></a></div>
<!-- Here be content -->
	<div class="contentContainer" itemscope itemtype="http://schema.org/MusicGroup">
		<h1 class="hidden" itemprop="name">Midvinterblot</h1>
		<div class="hidden" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<span class="hidden" itemprop="addressCountry">Sweden</span>
			<span class="hidden" itemprop="addressRegion">Stockholm</span>
		</div>
		<div class="navbar">
			<object id="svg1" data="/resources/images/orm2.svg" type="image/svg+xml"></object>
		</div>
                
                    <?php if( is_home() || is_front_page() ) : ?>
                    <div class="logo"></div>
                    <?php endif; ?>

		<div class="links" itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint">
			<!-- Here be links -->
			<a href="http://www.facebook.com/pages/Midvinterblot/159428540760626"
			  title="Facebook" target="_blank" itemprop="url">
				<img src="/resources/images/icons/facebook.png" alt="Midvinterblot on Facebook" width="59" height="59"/>
			</a>

			<a href="http://www.youtube.com/user/Midvinterblotband/"
			  title="Youtube" target="_blank" itemprop="url">
				<img src="/resources/images/icons/youtube.png" alt="Midvinterblot on Youtube" width="59" height="59"/>
			</a>
			

			
			<a href="http://www.twitter.com/midvinterblot"
			  title="Twitter" target="_blank" itemprop="url">
				<img src="/resources/images/icons/twitter.png" alt="Midvinterblot on Twitter" width="59" height="59"/>
			</a>
			
			<a href="http://www.metal-archives.com/bands/Midvinterblot/3540356739"
			  title="Encyclopedia Metallum" target="_blank" itemprop="url">
				<img src="/resources/images/icons/mchives.png" alt="Midvinterblot on Encyclopaedia Metallum" width="59" height="59"/>
			</a>
			<?php if( is_home() || is_front_page() ) : ?>
			<a class="button modalbox" href="#inline" itemprop="email">
				<img src="/resources/images/icons/mail.png" alt="Contact Midvinterblot By Mail" width="59" height="59"/>
			</a>
			<?php endif; ?>
		</div>

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

				<input id="send" class="button" type="image" src="/resources/images/icons/sendmail.png" alt="send message" name="send email" width="124" height="39">
				</fieldset>
			</form>
		</div>
		<!-- Other Content -->
		<div class="content">
			<?php if( is_home() || is_front_page() ) : ?>
				<br /><br /><br /><br />
				<img src="/resources/images/divider.png" alt="ornament"/>
				<br /><br /><br /><br />
			<?php endif; ?>
