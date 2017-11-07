<section class="related-posts">
		<div class="row">
			<div class="small-12 columns">
				
				<?php if($post_category[0]->name != 'Featured') { ?>
				  <h3 class="other-projects">Other <?php echo $post_category[0]->name ?> Projects</h3>
				<?php }else{ ?>
				  <h3 class="other-projects">Other <?php echo $post_category[1]->name ?> Projects</h3>
				<?php } ?>
			</div>

		<?php
			$args  = array( 
				'cat'            => $post_category[0]->term_id,
				'posts_per_page' => 3,
				'post__not_in'   => array($post_id)
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>

			<div class="medium-6 large-4 columns end" style="margin-bottom:40px">

				<?php if(has_post_format('audio')) { ?>
				
				<!-- Featured image -->
				<div class="feat-img-cont vertical shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<div class="play">
						<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
						<p>Play Audio</p>
					</div>
				</div>

				<?php }else if(has_post_format('video')) { ?>

				<!-- Featured image -->
				<div class="feat-img-cont vertical shadow" data-video="<?php the_field('file',$post->ID); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<div class="play">
						<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
						<p>Play Video</p>
					</div>
				</div>

				<?php } ?>

				<!-- Project title/author/content (meta) -->
				<div class="project-meta"><h3><?php the_title(); ?></h3><p> <?php if(get_field('author')){ echo 'by ';the_field('author');}else{echo '<em>(Demo)</em>';} ?></p></div>
				<p class="description">
					<?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?>
				</p>
				<a href="<?php the_permalink(); ?>"><button class="btn-black">View Project</button></a>
			</div>

		<?php endwhile;wp_reset_postdata(); ?>

		</div>
	</section>