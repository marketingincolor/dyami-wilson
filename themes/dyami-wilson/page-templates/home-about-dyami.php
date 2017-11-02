<section class="about" id="meet-dyami">
		<div class="row">
			<div class="medium-11 medium-offset-1 columns">
				<h2><?php the_field('about_section_title'); ?></h2>
			</div>
			<div class="medium-11 medium-offset-1 columns relative">
				<div class="row">
					<div class="medium-8 columns end">
						<div class="row">
							<div class="medium-11 columns">
								<?php the_field('about_section_description'); ?>
							</div>
						</div>
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
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/home/dyami-wilson.jpg" alt="Dyami Wilson">
				</div>
			</div>
		</div>
	</section>