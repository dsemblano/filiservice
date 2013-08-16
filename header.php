<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package filiservice
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" />
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title centralizar"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<figure>			
			<div class="vcard">
				<div class="adr">
					<div class="street-address">Estrada dos Rem&eacute;dios, 1943&nbsp;-&nbsp;Madalena</div>&nbsp;-&nbsp;
					<span class="locality">Recife</span>&nbsp;-&nbsp;<span class="region">Pernambuco</span>
				</div>
				<div class="tel"><a href="tel:8134465688">81 3446.5688</a></div>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header-yellow.png" alt="logo filiservice">			
		</figure>
		<nav id="site-navigation" class="main-navigation centralizar" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'filiservice' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'filiservice' ); ?>"><?php _e( 'Skip to content', 'filiservice' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->