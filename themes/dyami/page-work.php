<?php
	/* Template Name: Work */
	get_header();
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

<!-- Video/Audio Modal -->
<div class="reveal" id="audio-video-modal" data-reveal>
  <h1 id="modal-title"></h1>
  <div id="modal-body"></div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php endwhile;endif;get_footer(); ?>