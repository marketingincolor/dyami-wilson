<section class="about" id="meet-dyami">
	<section class="inner-section" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/meet-dyami-bg-no-shadow.jpg);background-size:cover;background-repeat:no-repeat;background-position: center center">
		<div class="row">
			<div class="large-5 medium-6 columns">
				<h2><?php the_field('about_section_title'); ?></h2>
				<p class="text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/meet-dyami.png" alt="Dyami Wilson" class="shadow show-for-small-only"></p>
				<?php the_field('about_section_description'); ?>
			</div>
		</div>
	</section>
	<div class="row">
		<div class="large-5 medium-7 columns">
			<aside class="testimonial-box">
				<div class="row">
					<div class="medium-11 columns">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i></p>
						<p><?php the_field('testimonial'); ?></p>
						<p class="author">&mdash; <?php the_field('testimonial_author'); ?><br><?php the_field('testimonial_author_credentials'); ?></p>
					</div>
				</div>
			</aside>
		</div>
	</div>
</section>