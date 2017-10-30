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
			<ul>
			    <?php wp_list_categories( array(
			        'orderby'    => 'name',
			        'show_count' => true,
			        'exclude'    => array(1),
			        'hide_empty' => false
			    ) ); ?> 
			</ul>
		</div>
	</div>
</section>

<?php endwhile;endif;get_footer(); ?>