<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
  $options = get_option('mic_theme_options');
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php if ($options['webmaster_tools']) { ?>
		  <?php echo $options['webmaster_tools']; ?>
		<?php } ?>

		<?php if ($options['ga_code']) { ?>
		  <?php echo $options['ga_code']; ?>
		<?php } ?>

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

			<div class="row expanded top-bar__wrapper">

				<!-- Hamburger Menu -->
				<div class="small-3 columns">
					<?php get_template_part('page-templates/hamburger-icon'); ?>
				</div>
				<!-- /Hamburger Menu -->

				<!-- Equalizer Icon -->
				<div class="small-6 small-offset-3 columns text-center">
					<a href="<?php echo site_url(); ?>" title="Home"><img src="<?php echo get_stylesheet_directory_uri() .'/assets/images/icons/white-logo.png'; ?>" alt="Equalizer Icon"></a>
					<?php if (!is_front_page()) { ?>
							<p class="tagline"><?php the_field('home_page_tagline',5); ?></p>
					<?php	} ?>
				</div>
				<!-- /Equalizer Icon -->
				
				<!-- Social Icons -->
				<div class="small-3 columns text-right show-for-medium">
					<ul class="social-icons">

						<?php if ($options['facebook_link']) { ?>

							<li><a href="<?php echo $options['facebook_link']; ?>" title="Facebook Profile"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
							
						<?php }if ($options['twitter_link']) { ?>

							<li><a href="<?php echo $options['twitter_link']; ?>" title="Twitter Profile"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

						<?php }if ($options['spotify_link']) { ?>
							
							<li><a href="<?php echo $options['spotify_link']; ?>" title="Spotify Profile"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>

						<?php }if ($options['soundcloud_link']) { ?>

							<li><a href="<?php echo $options['soundcloud_link']; ?>" title="SoundCloud"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>

						<?php }if ($options['youtube_link']) { ?>

							<li><a href="<?php echo $options['youtube_link']; ?>" title="SoundCloud"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

						<?php }if ($options['linkedin_link']) { ?>

							<li><a href="<?php echo $options['linkedin_link']; ?>" title="SoundCloud"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

						<?php } ?>
					</ul> 
				</div>
				<!-- /Social Icons -->

			</div>
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
	
	<?php do_action( 'foundationpress_after_header' ); ?>
