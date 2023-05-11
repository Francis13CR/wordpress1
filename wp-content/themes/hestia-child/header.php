<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset='<?php bloginfo( 'charset' ); ?>'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="<?php echo esc_attr( $wrapper_div_classes ); ?>">
		<header class="header <?php echo esc_attr( $header_class ); ?>">
			<nav class="nav-hestia-child">
			<?php
			 wp_nav_menu([
				'theme_location' => 'menu_principal'
			 ]);
			 ?>
			 <hr>
			 <?php
			 wp_nav_menu([
				'theme_location' => 'menu_secundario'
			 ]);
			?>
			</nav>
		</header>
