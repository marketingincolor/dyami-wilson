<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<section class="work-hero">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/work/work-hero.jpg" alt="">
</section>


<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class('featured-work') ?> id="post-<?php the_ID(); ?>">
		<div class="row">
			<div class="small-12 columns">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="single__layout-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>

<?php endwhile;?>


<?php get_footer();
