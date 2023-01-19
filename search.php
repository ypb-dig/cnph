<?php get_header(); 
	/**
 	* Template Name: Search Page
 	*/
?>

	<section class="blog pt-5" style="border-top:0">
		<div class="container">
			<div class="row pb-4">
				
				<?php
					$s=get_search_query();
					$args = array(
						's' =>$s
					);
					// The Query
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) {
						_e("<div class='col-12'><h3 style='font-weight:bold'>Resultados encontrados para ".get_query_var('s').":</h3></div>");
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
					?>
					<div class="col-md-4 pt-3">
						<div class="card ">
						<a href="<?php the_permalink() ?>">
							<?php if(has_post_thumbnail()) {  ?>
								<img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
							<?php } else{  ?>
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/03/sem-imagem.jpg" class="img-fluid">
							<?php } ?>	
						</a>
						<div class="card-body">
							<h5 class="card-title">
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h5>
							<p class="card-text"><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink() ?>">Leia mais >></a>
							<div class="patrocinio text-center pt-4">
								<img src="<?php the_field('logo_patrocinio'); ?>" style="height:45px">
							</div>
						</div>
					</div>
					</div>
					<?php } }else{ ?>

					<h2 style='font-weight:bold;color:#000'>Nenhum resultado encontrado!</h2>
					<div class="alert alert-info">
						<p>Desculpa, mas não foi encontrado nenhum resultado com esse critério. Tente novamente com outras palavras.</p>
					</div>
				<?php } ?>
				
			</div>
		</div>
	</section>

<?php get_footer(); ?>