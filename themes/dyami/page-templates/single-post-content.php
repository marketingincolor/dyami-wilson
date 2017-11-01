<section class="single-hero" style="background: url( <?php bloginfo('template_directory'); ?>/assets/images/single/single-hero.jpg) center center no-repeat;background-size:cover"></section>

<section class="featured-post">
	<div class="row">
		<div class="large-6 medium-8 columns medium-centered">
			<!-- Featured image -->
				
				<?php if(has_post_format('audio')) { ?>

			  <div class="feat-img-cont" data-audio="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background: url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;background-size:cover;">
					<div class="play">
						<p><i class="fa fa-volume-up" aria-hidden="true"></i></p>
						<p>Play Audio</p>
					</div>
				</div>

				<?php }else if(has_post_format('video')) { ?>
					
			  <div class="feat-img-cont" data-video="<?php the_field('file'); ?>" data-open="audio-video-modal" data-title="<?php the_title(); ?>" style="background: url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;background-size:cover;">
					<div class="play">
						<p><i class="fa fa-play-circle" aria-hidden="true"></i></p>
						<p>Play Video</p>
					</div>
				</div>

				<?php } ?>

			</div>
			<!-- Post Title/Content -->
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<a href="<?php echo site_url(). '/work'; ?>"><button class="btn-black">Back To All Projects</button></a>
		</div>
	</div>
</section>