<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
  get_template_part('page-templates/left-menu');
  $options = get_option('mic_theme_options');
?>

		</section>
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/black-triangle.jpg" alt="" style="width:100%;margin-bottom:-1px;margin-top:-5%;">
		<div class="" data-sticky-footer>

			
			<footer class="footer row expanded" id="contact">

				<!-- Form Section -->
				<section class="footer__pre-form">
					<div class="row">
						<div class="medium-10 medium-offset-1 columns text-left">
							<section class="footer-top-container">
								<h2><?php echo $options['footer_title']; ?></h2>

								<?php if ($options['footer_phone']) { ?>
									
								<p class="footer__pre-form-phone"><?php echo $options['footer_phone']; ?></p>

								<?php } ?>

								<?php if ($options['footer_email']) { ?>
									
								<p class="footer__pre-form-email"><a href="mailto:<?php echo $options['footer_email']; ?>"><?php echo $options['footer_email']; ?></a></p>

								<?php } ?>

							</section>

							<section class="footer__form">
								<?php echo do_shortcode( '[ninja_form id=2]' ); ?>
							</section>
						</div>
					</div>
				</section>
				<!-- /Form Section -->

				<!-- Social Links -->
				<section class="footer__social-links">
					<div class="row footer__social-links-layout">
						<div class="small-12 medium-4 small-centered columns">
							<ul class="text-center">

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
					</div>
				</section>
				<!-- /Social Links -->

				<!-- Legal -->
				<section class="footer__legal">
					<p class="text-center">Copyright &copy; <?php echo date('Y') . ' Dyami Wilson'; ?> | <a href="<?php echo site_url().'/privacy-policy'; ?>" style="text-decoration: underline" title="Privacy Policy">Privacy Policy</a></p>
				</section>
				<!-- /Legal -->
				
				<!-- Scroll To Top -->
				<section class="footer__back-to-top">
					<div class="row expanded footer__back-to-top-layout" data-equalizer>
						<div class="back-top-container">
							<div class="footer__back-to-top-layout-caret-container" data-equalizer-watch>
								<i class="fa fa-caret-up" aria-hidden="true"></i>
							</div>
							<button class="footer__back-to-top-layout-btn show-for-medium" data-equalizer-watch>Back To Top</button>
						</div>
					</div>
				</section>
				<!-- /Scroll To Top -->
				
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
			</div><!-- Close off-canvas content -->
		</div><!-- Close off-canvas wrapper -->
	<?php endif; ?>


	<?php wp_footer(); ?>
	<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
