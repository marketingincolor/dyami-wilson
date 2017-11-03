<section class="featured-work" id="featured-work">
		<div class="row">
			<div class="small-12 columns clearfix">
				<h2>Featured Work</h2>
				<p><a href="<?php echo site_url().'/work'; ?>"><button class="btn-black hvr-rectangle-out" style="display:inline-block">View All Projects</button></a></p>
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

				<div class="clearfix feat-work-container" style="display:flex;align-items: center;margin-bottom: 10%;">
					
					<div class="medium-6 large-7 large-offset-1 medium-push-6 columns">

						<?php if (has_post_format('audio')) { ?>
								
	  				<div class="feat-img-cont shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  						<div class="play">
  							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
  							<p>Play Audio</p>
  						</div>
	  			  </div>

						<?php }else if (has_post_format('video')) { ?>

	  				<div class="feat-img-cont shadow" data-video="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  						<div class="play">
  							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
  							<p>Play Video</p>
  						</div>
	  			  </div>

						<?php } ?>
					</div>
					<div class="medium-5 large-4 medium-pull-5 columns">
						<div class="project-meta"><h3><?php the_title(); ?></h3><p> <?php if(get_field('author')){ echo 'by ';the_field('author');}else{echo '<em>(Demo)</em>';} ?></p></div>
						<p><?php echo wp_trim_words(get_the_content(),30,'...') ?></p>
						<p><a href="<?php the_permalink(); ?>" class="black-link">View Project</a></p>
					</div>
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

				<div class="clearfix feat-work-container" style="display:flex;align-items: center;">
					<div class="medium-6 large-7 columns">

						<?php if (has_post_format('audio')) { ?>
								
	  				<div class="feat-img-cont shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  						<div class="play">
  							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
  							<p>Play Audio</p>
  						</div>
	  			  </div>

						<?php }else if (has_post_format('video')) { ?>

	  				<div class="feat-img-cont shadow" data-video="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  						<div class="play">
  							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
  							<p>Play Video</p>
  						</div>
	  			  </div>

						<?php } ?>
												
					</div>
					<div class="medium-5 large-4 columns">
						<div class="project-meta"><h3><?php the_title(); ?></h3><p> <?php if(get_field('author')){ echo 'by ';the_field('author');}else{echo '<em>(Demo)</em>';} ?></p></div>
						<p><?php echo wp_trim_words(get_the_content(),30,'...') ?></p>
						<p><a href="<?php the_permalink(); ?>" class="black-link">View Project</a></p>
					</div>
				</div>

			<?php endwhile;wp_reset_postdata(); ?>

		</div>
	</section>