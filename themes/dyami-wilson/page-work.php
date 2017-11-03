<?php
	/* Template Name: Work */
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="work-hero" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/work/work-hero.jpg);background-repeat:no-repeat;background-size:cover;background-position: centter center">
	<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/work/work-hero.jpg" alt=""> -->
</section>

<section class="featured-work">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php the_title(); ?></h1>
			<!-- Display Left Menu -->
			<div class="hide-for-small-only">
			  <?php wp_nav_menu( array( 'theme_location' => 'category-menu','menu_id' => 'category-menu-list','menu_class' => 'category-menu-list','container' => 'ul' )); ?>
			</div>
			<div class="show-for-small-only">
				<?php
					$menu_name  = 'category-menu';
					$locations  = get_nav_menu_locations();
					$menu       = wp_get_nav_menu_object($locations[$menu_name]);
					$menu_items = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
				?>
				<select name="" id="work-select">
					<?php
				    foreach($menu_items as $item){
			        // set up title and url
			        $title = $item->title;
			        $link = $item->url;
			        echo '<option value="'.$link.'">'.$title.'</option>';
			      }
					?>
				</select>
			</div>
		</div>
	</div>
	<div id="work-container"></div>
</section>

<!-- Include Modal -->
<?php require('page-templates/audio-video-modal.php') ?>

<?php endwhile;endif;get_footer(); ?>