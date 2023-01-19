<?php get_header(); ?> 

<section>
	<div class="container">
		<div class="row pb-5">
			<div class="col text-center">
				<h1><?php single_cat_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-3 col-sm-6 mb-4" style="width: calc(100% / 4 + 0px);padding: 10px;">
					<div class="icon text-center">
						<a href="<?php the_permalink() ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php single_cat_title( '', false ); ?>" style="max-width:100%;height:160px">
							<p class="text-center p-3" style="font-size:18px;color:#87868a">
								<?php the_title(); ?>
							</p>
						</a>
					</div>					
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>




<?php get_footer(); ?>