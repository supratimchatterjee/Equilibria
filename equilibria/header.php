<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Equilibria_Finance
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $logo_header = get_field('logo_header', 'option');?>
<header id="header" class="site-header uk-position-z-index" data-uk-sticky>
	<div class="uk-container uk-container-center">
		<nav class="uk-navbar uk-position-relative">
			<a title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>" href="<?php bloginfo('url') ?>/" class="uk-navbar-brand uk-padding-remove">
			<?php if($logo_header): ?>
				<img src="<?php echo $logo_header; ?>" alt="<?php bloginfo('name') ?>">
			<?php else: ?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/logo.svg" alt="<?php bloginfo('name') ?>">
			<?php endif; ?>	
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'uk-navbar-nav uk-navbar-flip  tm-hidden-small' ) ); ?>
			<div class="main-menu-button tm-show-small">
				<span class="line line1"></span>
				<span class="line line2"></span>
				<span class="line line3"></span>
			</div>
		</nav>
	</div>
</header>
<div class="tm-mobile-nav-drop uk-position-absolute">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => '' ) ); ?>
</div>