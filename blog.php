<?php get_header();
/* Template Name: Blog */ ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="topo-treinamentos" style="background:url(<?php the_post_thumbnail_url(); ?>)">
	<div class="container">
		<div class="row align-items-center text-center">
			<div class="col">
				<h1 class="font-italic"><?php the_title();?></h1>
			</div>
		</div>
	</div>
</section>

<div class="divider-img"></div>
<div class="clearfix"></div>

<?php endwhile;endif;?>

<section class="blog pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				
				<?php if ( have_posts() ) : ?>
 				<?php query_posts("category_name=blog&posts_per_page=-1"); ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="row">
					<div class="col-md-5">
						<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid"></a>
					</div>
					<div class="col-md-7">
						<div class="title-post pb-2">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/10/logo-blog.png" class="pb-3" style="max-height:40px;"><br>
							<a href="<?php the_permalink() ?>">
								<?php the_title(); ?>
							</a>
						</div>
						<div class="author-post pb-3">
							Postado por: <?php the_author(); ?>
						</div>
						<div class="excerpt-post pb-3">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				
				<?php endwhile; else: ?>
				<p>Não existe nenhum post.</p>
				<?php endif; ?>
				<?php wp_reset_query();?>
				
			</div>
			
			<div class="col-md-3">
				<?php
					if(is_active_sidebar('sidebar-post')){
						dynamic_sidebar('sidebar-post');
					}
				?>
			</div>
		</div>
		<div class="row">
		    <div class="col-12">
		        <div class="pagination">
                  <?php wordpress_pagination(); ?>
                </div>
		    </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>