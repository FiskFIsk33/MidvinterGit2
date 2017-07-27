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
?>
<!DOCTYPE html>
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
<meta name="viewport" content="width=device-width, user-scalable=1">
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
<link rel="icon" type="image/png" href="https://i.midvinterblot.com/favicon.png" />
<meta name="Title" content="Midvinterblot"/>
<meta property="og:title" content="Midvinterblot"/>
<meta name="description" content="The official webpage of the swedish folk-metal band Midvinterblot" />
<meta property="og:description" content="The official webpage of the swedish folk-metal band Midvinterblot" />

<meta property="og:type" content="website" />
<meta property="og:image" content="https://i.midvinterblot.com/link.png" />
<link rel="image_src" href="https://i.midvinterblot.com/link.png" />

	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<!-- wp -->
<?php
	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	 
	 
	wp_head();
?>

</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="background">
		<div class="BgTL"></div>
		<div class="BgTR"></div>
		<div class="BgTM"></div>
		<div class="BgTML"></div>
		<div class="BgTMR"></div>
		<div class="BgML"></div>
		<div class="BgBL"></div>
		<div class="BgBR"></div>
		<div class="BgBM"></div>
		<div class="BgSign"></div>
	</div>

	<div class="content">
		<div class="navbar">
			<object id="svg1" data="https://i.midvinterblot.com/orm2.svg" type="image/svg+xml"></object>
		</div>
		<?php if( is_home() || is_front_page() ) : ?>
			<div class="logo"></div>
		<?php endif; ?>
		<div class="links" itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint">
		<!-- Here be links -->
			<a href="http://www.facebook.com/pages/Midvinterblot/159428540760626"
			  title="Facebook" target="_blank" itemprop="url">
				<img src="https://i.midvinterblot.com/social/facebook.png" alt="Midvinterblot on Facebook" width="59" height="59"/>
			</a>
			<a href="http://www.youtube.com/user/Midvinterblotband/"
			  title="Youtube" target="_blank" itemprop="url">
				<img src="https://i.midvinterblot.com/social/youtube.png" alt="Midvinterblot on Youtube" width="59" height="59"/>
			</a>
			<a href="http://www.twitter.com/midvinterblot"
			  title="Twitter" target="_blank" itemprop="url">
				<img src="https://i.midvinterblot.com/social/twitter.png" alt="Midvinterblot on Twitter" width="59" height="59"/>
			</a>
			<a href="http://www.metal-archives.com/bands/Midvinterblot/3540356739"
			  title="Encyclopedia Metallum" target="_blank" itemprop="url">
				<img src="https://i.midvinterblot.com/social/mchives.png" alt="Midvinterblot on Encyclopaedia Metallum" width="59" height="59"/>
			</a>
			<a class="modalbox" href="#inline" title="Contact us" itemprop="email">
				<img src="https://i.midvinterblot.com/social/mail.png" alt="Contact Midvinterblot By Mail" width="59" height="59"/>
			</a>
		</div>

		<div class="knopdivider"></div>
		<!-- Wordpress Content -->