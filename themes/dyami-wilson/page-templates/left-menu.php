<aside class="left-menu" id="left-menu">
	<button class="menu-close"><i class="fa fa-times" aria-hidden="true"></i></button>
	<div id="left-menu-wrap">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/logo-black.jpg" alt="">
		
		<!-- Display Left Menu -->
	  	<?php wp_nav_menu( array( 'theme_location' => 'left-menu','menu_id' => 'left-menu-list','menu_class' => 'left-menu-list','container' => 'ul' )); ?>
		<ul>
			<li class="social-icons">
				<ul>
					<li><a href="#!" title="Facebook Profile"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li><a href="#!" title="Twitter Profile"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#!" title="Spotify Profile"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
					<li><a href="#!" title="SoundCloud"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
				</ul>
			</li>
		</ul>
	</div>
</aside>

<script>
	var siteURL = "<?php echo site_url(); ?>";
	$('#left-menu-list').find('li a').each(function(){
		var linkText = $(this).attr('href');
		$(this).attr('href',siteURL + linkText);
	});
</script>