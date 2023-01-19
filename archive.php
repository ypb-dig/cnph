<?php get_header(); ?>
    
		<?php $page = get_page( 98 );
		$pid=$page->ID; $sobre_page = new WP_Query("page_id=$pid");
		while($sobre_page->have_posts()) : $sobre_page->the_post(); $page = get_page( $pid );?>

		<section class="topo-treinamentos" style="background:url(<?php the_post_thumbnail_url(); ?>)">
			
		<?php endwhile;?>
			
			<div class="container">
				<div class="row align-items-center text-center">
					<div class="col">
						<h1 class="font-italic">Blog</h1>
					</div>
				</div>
			</div>
		</section>

		<div class="divider-img"></div>
		<div class="clearfix"></div>

	<section class="blog pt-5 pb-5" style="border-top:0">
	
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php if ( have_posts() ) : ?>		
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
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</section>
    
<?php get_footer(); ?>