<section class="about" id="meet-dyami">
	<section class="inner-section">
		<div class="row expanded">
			<div class="large-5 medium-6 large-offset-1 columns">
				<h2><?php the_field('about_section_title'); ?></h2>
				<p class="text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/meet-dyami.png" alt="Dyami Wilson" class="shadow show-for-small-only"></p>
				<?php the_field('about_section_description'); ?>
				<aside class="testimonial-box">
					<div class="row">
						<div class="medium-11 columns">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/quote-icon.jpg" alt="">
							<p><?php the_field('testimonial'); ?></p>
							<p class="author">&mdash; <?php the_field('testimonial_author'); ?></p>
							<p class="credentials"><?php the_field('testimonial_author_credentials'); ?></p>
						</div>
					</div>
				</aside>
			</div>
			<div class="medium-6 columns img-column hide-for-small-only">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/home/meet-dyami-no-bg.jpg" alt="">
			</div>
		</div>
	</section>
</section>