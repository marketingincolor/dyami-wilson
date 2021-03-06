<?php
	/* Template Name: Work */
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="work-hero">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/work/work-hero.jpg" alt="">
</section>

<section class="featured-work">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php the_title(); ?></h1>
			<!-- Display Left Menu -->
			 <?php wp_nav_menu( array( 'theme_location' => 'category-menu','menu_id' => 'category-menu-list','menu_class' => 'category-menu-list','container' => 'ul' )); ?>
		</div>
	</div>
	<div id="work-container"></div>
</section>

<!-- Include Modal -->
<?php require('page-templates/audio-video-modal.php') ?>

<?php endwhile;endif;get_footer(); ?>