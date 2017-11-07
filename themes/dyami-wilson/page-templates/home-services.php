<section class="services" id="services">
	<div class="row">
		<div class="small-12 columns clearfix">
			<h2 class="fff"><?php the_field('services_section_title'); ?></h2>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row expanded columns" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/home/services-top-bg.jpg);margin-bottom:5%">
		<aside class="clearfix">
			<div class="medium-8 medium-offset-1 columns service-box">
				<div class="row">
					<div class="medium-9 columns">
						<div class="service-meta">
							<h3><?php the_field('first_service_title'); ?></h3> <a href="<?php echo site_url().'/work'; ?>" class="white-link" class="white-link">View Projects</a>
						</div>
						<p><?php the_field('first_service_description'); ?></p>
					</div>
				</div>
			</div>
		</aside>
	</div>
	<div class="row expanded columns" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/home/services-bottom-bg.jpg);">
		<aside class="clearfix">
			<div class="medium-6 medium-offset-4 columns service-box box2 end">
				<div class="service-meta">
					<h3><?php the_field('second_service_title'); ?></h3> <a href="<?php echo site_url().'/work'; ?>" class="white-link">View Projects</a>
				</div>
				<p><?php the_field('second_service_description'); ?></p>
			</div>
		</aside>
	</div>
</section>

<section class="services2">
	<div class="row expanded columns">
		<div class="background" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/services-full-img.jpg)"></div>

		<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/services-full-img.jpg" alt=""> -->
	</div>
	<div class="row box-row">
		<div class="medium-6 large-5 large-offset-1 columns">
			<div class="service-box">
				<h3><?php the_field('third_service_title'); ?></h3> 
				<a href="<?php echo site_url().'/work'; ?>" class="white-link">View Projects</a>
				<p><?php the_field('third_service_description'); ?></p>
			</div>
		</div>
		<div class="medium-6 large-5 columns end">
			<div class="service-box">
				<h3><?php the_field('fourth_service_title'); ?></h3>
				<a href="<?php echo site_url().'/work'; ?>" class="white-link">View Projects</a>
				<p><?php the_field('fourth_service_description'); ?></p>
			</div>
		</div>
	</div>
</section>