<section class="featured-work" id="featured-work">
		<div class="row">
			<div class="small-12 columns clearfix">
				<h2>Featured Work</h2>
				<p><a href="<?php echo site_url().'/work'; ?>"><button class="btn-black">View All Projects</button></a></p>
			</div>
			<div class="clearfix"></div>
		
			<?php
				$args  = array( 
					'category_name'  => 'featured',
					'posts_per_page' => 1
				);

				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					$post_exclude = get_the_ID();
			?>

				<div class="medium-5 large-4 columns clearfix">
					<h3><?php the_title(); ?></h3>
					<p><?php echo wp_trim_words(get_the_content(),30,'...') ?></p>
					<p><a href="<?php the_permalink(); ?>" class="text-uppercase"><button class="btn-black">View Project</button></a></p>
				</div>
				<div class="medium-6 large-7 medium-offset-1 columns">
					<?php the_post_thumbnail(); ?>
				</div>

			<?php endwhile;wp_reset_postdata(); ?>

			<?php
				$args  = array( 
					'category_name'  => 'featured',
					'posts_per_page' => 1,
					'post__not_in'   => array($post_exclude)
				);
				
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>

				<div class="medium-6 large-7 medium-offset-1 columns">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="medium-5 large-4 columns">
					<h3><?php the_title(); ?></h3>
					<p><?php echo wp_trim_words(get_the_content(),30,'...') ?></p>
					<p><a href="<?php the_permalink(); ?>" class="text-uppercase"><button class="btn-black">View Project</button></a></p>
				</div>

			<?php endwhile;wp_reset_postdata(); ?>

		</div>
	</section>