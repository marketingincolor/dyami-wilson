<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
	$post_category = get_the_category();
?>
	

	<section class="home-hero" style="background: url( <?php bloginfo('template_directory'); ?>/assets/images/single/single-hero.jpg) center center no-repeat;background-size:cover"></section>

	<section class="featured-post">
		<div class="row">
			<div class="large-6 medium-8 columns medium-centered">
				<!-- Featured image -->
				<div class="feat-img-cont" style="background: url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;background-size:cover;">
					
					<?php if(has_post_format('audio')) { ?>

						<div class="play">
							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
							<p>Play Audio</p>
						</div>

					<?php }else if(has_post_format('video')) { ?>

						<div class="play">
							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
							<p>Play Video</p>
						</div>

					<?php } ?>

				</div>
				<!-- Post Title/Content -->
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<a href="<?php echo site_url(). '/work'; ?>"><button class="btn-black">Back To All Projects</button></a>
			</div>
		</div>
	</section>

<?php endwhile;?>

	<!-- Show related posts -->
	<section class="related-posts">
		<div class="row">
			<div class="small-12 columns">
				<h3>Other <?php echo $post_category[0]->name ?> Projects</h3>
			</div>

		<?php
			$args  = array( 
				'cat'            => $post_category[0]->term_id,
				'posts_per_page' => 3
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>

			<div class="medium-4 columns end">
				<!-- Featured image -->
				<div class="feat-img-cont" style="background: url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;background-size:cover;">
					
					<?php if(has_post_format('audio')) { ?>

						<div class="play">
							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
							<p>Play Audio</p>
						</div>

					<?php }else if(has_post_format('video')) { ?>

						<div class="play">
							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
							<p>Play Video</p>
						</div>

					<?php } ?>

				</div>
				<div class="project-meta"><h3><?php the_title(); ?></h3><p>by <?php if(get_field('author')){ echo 'by ';the_field('author');}else{echo 'Demo';} ?></p></div>
				<p class="description">
					<?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?>
				</p>
				<a href="<?php the_permalink(); ?>"><button class="btn-black">View Project</button></a>
			</div>

		<?php endwhile;
		wp_reset_postdata(); ?>

		</div>
	</section>

<?php get_footer();
