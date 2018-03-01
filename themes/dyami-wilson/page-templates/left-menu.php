<?php $options = get_option('mic_theme_options'); ?>

<aside class="left-menu" id="left-menu">
	<button class="menu-close" aria-label="Close Menu"><i class="fa fa-times" aria-hidden="true"></i></button>
	<div id="left-menu-wrap">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/logo-black.jpg" alt="">
		
		<!-- Display Left Menu -->
			<?php if(is_front_page()) { ?>
	  	  <?php wp_nav_menu( array( 'theme_location' => 'left-menu','menu_id' => 'left-menu-list','menu_class' => 'left-menu-list','container' => 'ul' )); ?>
			<?php } else { ?>
	  	  <?php wp_nav_menu( array( 'theme_location' => 'left-menu-not-home','menu_id' => 'left-menu-list','menu_class' => 'left-menu-list','container' => 'ul' )); ?>
	  	<?php } ?>
		<ul>
			<li class="social-icons">
				<ul>
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

					<?php }if ($options['vimeo_link']) { ?>

						<li><a href="<?php echo $options['vimeo_link']; ?>" title="Vimeo"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>

					<?php }if ($options['linkedin_link']) { ?>

						<li><a href="<?php echo $options['linkedin_link']; ?>" title="SoundCloud"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

					<?php } ?>
				</ul>
			</li>
		</ul>
	</div>
</aside>
