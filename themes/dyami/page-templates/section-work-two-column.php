<section id="mixing">
	<div class="small-12 columns">
		<h3 id="work-category"><?php echo $cat_name; ?></h3>
	</div>
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