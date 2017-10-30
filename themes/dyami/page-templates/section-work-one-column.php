<section id="mixing">
	<div class="small-12 columns">
		<h3 id="work-category"><?php echo $cat_name; ?></h3>
	</div>
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

