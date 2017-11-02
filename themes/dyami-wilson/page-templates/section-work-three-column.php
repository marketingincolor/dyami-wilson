
	<section id="mixing">
		<div class="small-12 columns">
			<h3><?php echo $cat_name; ?></h3>
		</div>
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
	