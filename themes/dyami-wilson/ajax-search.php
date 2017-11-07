<?php 
require('../../../wp-load.php');
header("HTTP/1.1 200 OK");
?>

<div class="row" style="margin-top:0" id="ajax-row">

	<!-- query video post format -->
	<?php
      $cat_array = array();
	  	$terms = get_terms( array(
	  	    'hide_empty' => false,
	  	));
	  	foreach ($terms as $term) {
	  		array_push($cat_array, $term->slug);
	  	}
	  	array_shift($cat_array);
	  	array_shift($cat_array);
	  	array_pop($cat_array);
	  	$cat_list = join(',',$cat_array);

	  $cat     = $_GET['cat'];
	  if ($cat == 'All') {
	  	$cat = $cat_list;
	  	$cat_name = 'All';
	  }else{
	  	$cat_obj = get_category_by_slug($cat);
      $cat_name = $cat_obj->name;
	  }

		$filter = new WP_Query( array(
	    'category_name' => $cat,
	    'tax_query'     => array(
	      array(                
	        'taxonomy' => 'post_format',
	        'field' => 'slug',
	        'terms' => array('post-format-video','post-format-audio')
	      )
	    ),
		));
?>
		<section id="mixing" class="clearfix">
			<div class="small-12 columns">
				<h3 id="work-category"><?php echo $cat_name; ?></h3>
			</div>

<?php
	  if($filter->have_posts()) { while($filter->have_posts()) { $filter->the_post();
	  	$count_faqs = $filter->post_count;

	  	// If there is only 1 post in the category
	  	if ($count_faqs == 1) {
?>

					<div class="small-12 medium-8 columns">

							<?php if (has_post_format('audio')) { ?>
									
		  				<div class="feat-img-cont shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	  						<div class="play">
	  							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
	  							<p>Play Audio</p>
	  						</div>
		  			  </div>

							<?php }else if (has_post_format('video')) { ?>

		  				<div class="feat-img-cont shadow" data-video="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	  						<div class="play">
	  							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
	  							<p>Play Video</p>
	  						</div>
		  			  </div>

							<?php } ?>
								
					</div>
					<div class="small-12 medium-4 columns">
						<h3 class="one-col-title"><?php the_title(); ?></h3>
						<p class="description">
							<?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?>	
						</p>
						<a href="<?php the_permalink(); ?>"><button class="hvr-rectangle-out btn-black">View Project</button></a>
					</div>

					<!-- If there is only 2 posts in the category -->
          <?php }else if ($count_faqs == 2) { ?>
	  		
	  			<div class="small-12 medium-6 columns end">
		  			
		  			<?php if (has_post_format('audio')) { ?>

	  				<div class="feat-img-cont shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  						<div class="play">
  							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
  							<p>Play Audio</p>
  						</div>
	  			  </div>

		  			<?php }else if (has_post_format('video')) { ?>

	  				<div class="feat-img-cont shadow" data-video="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  						<div class="play">
  							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
  							<p>Play Video</p>
  						</div>
	  			  </div>

		  			<?php } ?>

	  				<h3><?php the_title(); ?></h3>
	  				<p><?php the_field('author'); ?></p>
	  				<p class="description">
	  					<?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?>
	  				</p>
	  				<a href="<?php the_permalink(); ?>"><button class="hvr-rectangle-out btn-black">View Project</button></a>
	  			</div>
			
          <?php }else if ($count_faqs >= 3) { ?>
	  		
	  			  <div class="small-12 medium-6 large-4 columns end" style="margin-bottom:50px">

								<?php if (has_post_format('audio')) { ?>

			  				<div class="feat-img-cont shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		  						<div class="play">
		  							<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
		  							<p>Play Audio</p>
		  						</div>
			  			  </div>

		  					<?php }else if (has_post_format('video')) { ?>

			  				<div class="feat-img-cont shadow" data-video="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		  						<div class="play">
		  							<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
		  							<p>Play Video</p>
		  						</div>
			  			  </div>

		  					<?php } ?>

	  				<h3><?php the_title(); ?></h3>
	  				<p><?php if(get_field('author')){ echo 'by ';the_field('author');}else{echo '<em>(Demo)</em>';} ?></p>
	  				<p class="description">
	  					<?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?>
	  				</p>
	  				<a href="<?php the_permalink(); ?>"><button class="hvr-rectangle-out btn-black">View Project</button></a>
	  			</div>

<?php
	  	}else{
	  		echo '<h3 class="blue-heading">Sorry, no work matches that category. Please try a different category.</p>';
	  	}}}
?>

  </section>
</div>
