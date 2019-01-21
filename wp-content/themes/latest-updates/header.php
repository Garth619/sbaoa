<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=4" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick-theme.css"/>
				


<meta name="google-site-verification" content="6l6OMabsGcr0g4NnTfm8NwPimG3lS_lvrbUEAgBWH-Q" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

 <script src="<?php bloginfo( 'template_directory' ); ?>/js/slick/slick/slick.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/jQuery.mmenu-master/src/js/jquery.mmenu.min.js" type="text/javascript"></script>
   <link href="<?php bloginfo( 'template_directory' ); ?>/jQuery.mmenu-master/src/css/jquery.mmenu.css" type="text/css" rel="stylesheet" />
<!--    <script src="<?php bloginfo( 'template_directory' ); ?>/cycle2.js"></script> -->
   <script type="text/javascript">
   jQuery(document).ready(function() {
	   
	   
	   
jQuery('.new_slideshow').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay:true,
  dots:false,
  fade:true,
  autoplaySpeed:6000
});
	   
	   
	   
	   
      jQuery("#my-menu").mmenu();
      jQuery("#my-button").click(function() {
         jQuery("#my-menu").trigger("open.mm");
         
      });
   });
</script>
<script type="text/javascript">
   jQuery(document).ready(function() {
      jQuery("#my-menu").mmenu();
      jQuery("#my-button").click(function() {
        jQuery("#my-menu").trigger("close.mm");
      });
   });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28969355-20', 'sbaoa.org');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<div id="mobile-menu-wrapper">

<div id="wrapper" class="hfeed">
	<div id="header">
		
		<div class="logo">
			<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png"/></a>
		</div>
		<div id="social_icons">
			<a href="https://www.facebook.com/SomaliBantuAssociationofAmerica?ref=sgm" target="_blank"><img style="margin-right:3px;" src="<?php bloginfo( 'template_directory' ); ?>/images/fb.png"/></a>
			<a style="margin-right:3px;" href="https://twitter.com/SBAOA" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png"/></a>
			<a href="https://www.linkedin.com/profile/view?id=226070606&authType=name&authToken=zU_V&trk=prof-connections-name" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/linkedin-icon.png"/></a>
		</div>
			<div id="mobile-button-wrapper">
			<a id="mobile-button" href="#my-menu">Menu</a>
			<div id="my-menu" class="hide">
    	  <?php wp_nav_menu( array( 'container_class' => 'menu-header-mobile', 'theme_location' => 'primary' ) ); ?>
			</div><!-- my menu -->
			</div>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
</div><!-- #header -->

	<div id="main">
