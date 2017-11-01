<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

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
			</div>
		</div>
	</section>

<?php do_action( 'foundationpress_before_content' ); ?>

	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="row single__layout">
			<div class="single__layout-content">

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

				<?php the_content(); ?>
			</div>
		</div>
	</article>

<?php endwhile;?>


<?php get_footer();
