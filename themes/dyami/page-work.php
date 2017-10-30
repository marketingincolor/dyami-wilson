<?php
	/* Template Name: Work */
	get_header();
	get_template_part('page-templates/short-header');
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

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



<?php endwhile;endif;get_footer(); ?>