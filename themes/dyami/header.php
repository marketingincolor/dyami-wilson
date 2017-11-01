<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">

		<!-- HIDE FOR NOW -->
		<?php if(false): ?>
		<?php get_template_part('page-templates/hamburger-icon'); ?>
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>
		<?php endif; ?>


		<nav class="site-navigation top-bar" role="navigation">

			<div class="row expanded top-bar__wrapper" data-equalizer>

				<!-- Hamburger Menu -->
				<div class="small-3 columns top-bar__hamburger-menu" data-equalizer-watch>
					<?php get_template_part('page-templates/hamburger-icon'); ?>
<!-- 					<div class="site-title-bar title-bar" <?php #foundationpress_title_bar_responsive_toggle() ?>>
						<div class="title-bar-left">
							<button class="menu-icon" type="button" data-toggle="<?php #foundationpress_mobile_menu_id(); ?>"></button>
							<span class="site-mobile-title title-bar-title">
								<a href="<?php #echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php #bloginfo( 'name' ); ?></a>
							</span>
						</div>
					</div> -->
				</div>
				<!-- /Hamburger Menu -->

				<!-- Equalizer Icon -->
				<div class="small-6 columns top-bar__equalizer-icon" data-equalizer-watch>
					<a href="<?php site_url(); ?>" title="Home"><img src="<?php echo get_stylesheet_directory_uri() .'/assets/images/icons/logo-white.png'; ?>" alt="Equalizer Icon"></a>
				</div>
				<!-- /Equalizer Icon -->
				
				<!-- Social Icons -->
				<div class="small-3 columns text-center show-for-medium top-bar__social-icons show-for-large" data-equalizer-watch>
					<ul class="">
						<li><a href="#!" title="Facebook Profile"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
						<li><a href="#!" title="Twitter Profile"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#!" title="Spotify Profile"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
						<li><a href="#!" title="SoundCloud"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
					</ul> 
				</div>
				<!-- /Social Icons -->

			</div>

			<!-- Name Logo -->
			<div class="row">
				<div class="small-12 columns text-center top-bar__name">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/dyami-wilson-logo.png'; ?>" alt="Dyami Wilson Logo" />
				</div>
			</div>
			<!-- /Name Logo -->

		</nav>

		<!-- HIDE THIS FOR NOW. -->
		<?php if(false): ?>
		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		<?php endif; ?>


	</header>
	<script>templateURL = '<?php bloginfo("template_directory"); ?>';</script>
	<section class="container clearfix">
		<?php do_action( 'foundationpress_after_header' );
