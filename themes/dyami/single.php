<?php 
  get_header();
  while ( have_posts() ) : the_post(); 
		$post_category = get_the_category();
		$post_id       = $post->ID;
		// Show post content
		require('page-templates/single-post-content.php');
  endwhile;
?>

<!-- Show related posts -->
<?php require('page-templates/single-related-posts.php'); ?>

<!-- Include Modal -->
<?php require('page-templates/audio-video-modal.php'); ?>


<?php get_footer();
