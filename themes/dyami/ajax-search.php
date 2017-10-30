<?php 
require('../../../wp-load.php');
header("HTTP/1.1 200 OK");
?>

<div class="row">

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
		<section id="mixing">
			<div class="small-12 columns">
				<h3 id="work-category"><?php echo $cat_name; ?></h3>
			</div>
			
<?php
	  if($filter->have_posts()) { while($filter->have_posts()) { $filter->the_post();
	  	$count_faqs = $filter->post_count;
	  	if ($count_faqs == 1) {
?>
					<div class="small-12 medium-8 columns">
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
					</div>
					<div class="small-12 medium-4 columns">
						<h4><?php the_title(); ?></h4>
						<p class="description">
							<?php the_content(); ?>	
						</p>
						<a href="<?php the_permalink(); ?>"><button class="btn-black">View Project</button></a>
					</div>
				</section>

<?php }else if ($count_faqs == 2) { ?>
	  		
	  			<div class="small-12 medium-6 columns">
	  				<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
	  				<h3><?php the_title(); ?></h3>
	  				<p><?php the_author(); ?></p>
	  				<p class="description">
	  					<?php the_content(); ?>
	  				</p>
	  				<button class="btn-black">View Project</button>
	  			</div>
	  		</section>

<?php }else if ($count_faqs >= 3) { ?>
	  		
	  			<div class="small-12 medium-4 columns">
	  				<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
	  				<h3><?php the_title(); ?></h3>
	  				<p><?php the_author(); ?></p>
	  				<p class="description">
	  					<?php the_content(); ?>
	  				</p>
	  				<a href="<?php the_permalink(); ?>"><button class="btn-black">View Project</button></a>
	  			</div>
	  		</section>

<?php
	  	}else{
	  		echo '<h3 class="blue-heading">Sorry, no work matches that category. Please try a different category.</p>';
	  	}}}
?>


</div>
