<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

	<!DOCTYPE html>

<html>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

<title>NATS Canada</title>

<meta name="description" content="">

<meta name="keywords" content="">

<link href="<?php  echo get_stylesheet_directory_uri()?>/assets/css/custom.css" rel="stylesheet" type="text/css">

<?php wp_head(); ?>
</head>

<body  class="home-page"<?php body_class(); ?>>



	<!--================================Header Start===================================-->

	<header>

			<div class="lk-container">

				<div class="lk-row">

					<div class="lk-lg-3 lk-md-3 sm-md-3 lk-xs-8">

						<div class="logo">

							<a href="<?php echo site_url(); ?>"><img src="<?php  echo get_stylesheet_directory_uri()?>/assets/images/logo.png" alt=""/></a>

						</div>

					</div>

					<div class="lk-lg-9 lk-md-9 sm-md-9 lk-xs-4">

						<div class="navigation">
						<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
			<div class="navigation-top">
				<div class="wrap">
					
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
						</div>

					</div>

				</div>

			</div>

	</header>

	<!--================================Header End===================================-->
<!--================================Main Banner Start===================================-->
	<?php
