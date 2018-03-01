<section class="single-hero">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/single/single-hero1.jpg" alt="">
</section>

<section class="featured-post">
	<div class="row">
		<div class="large-6 medium-10 columns medium-centered">
			<!-- Featured image -->
				
				<?php if(has_post_format('audio')) { ?>

			  <div class="feat-img-cont shadow" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(<?php the_post_thumbnail_url(); ?>);">
					<div class="play">
						<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
						<p>Play Audio</p>
					</div>
				</div>

				<?php }else if(has_post_format('video')) { ?>
					
			  <div class="feat-img-cont shadow" data-video="<?php the_field('vimeo_link'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(<?php the_post_thumbnail_url(); ?>);">
					<div class="play">
						<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
						<p>Play Video</p>
					</div>
				</div>

				<?php } ?>

			<!-- Post Title/Content -->

			<?php 
				$cats = get_the_category();
				foreach ($cats as $the_cat) {
					if ($the_cat->name == 'Featured') {
						//do nothing
					}else{
						$the_category = $cat->name;
						break;
					}
				}
			?>
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p class="entry-author"><?php if(get_field('author')){ echo 'by ';the_field('author');}else{echo '<em>(Re-creation of Original)</em>';} ?></p>
				<h3 class="entry-category"><?php echo $the_category; ?></h3>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<a href="<?php echo site_url(). '/work'; ?>"><button class="btn-black"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back To All Projects</button></a>
		</div>
	</div>
</section>