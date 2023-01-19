<?php get_header();?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<style>
		.owl-carousel .owl-dots.disabled{
			display: block;
		}
		.img-main img{
			max-width: 360px;
		}
	</style>

    <section class="container" style="padding: 4rem 0;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row text-center">
                    <div class="col-md-6 offset-md-3">
						<div class="owl-carousel products owl-theme">
							<div class="img-main">
								<?php echo the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
							</div>		
							<?php
								if( have_rows('imagem_galeria') ):
								while ( have_rows('imagem_galeria') ) : the_row();
								if( get_row_layout() == 'imagens_galeria_box' ):
							?>	
							<div class="img-main">
								<img src="<?php the_sub_field('imagem_box'); ?> ?>">
							</div>	
							
							<?php endif;endwhile;endif; ?>
						</div>
                    </div>
                    <div class="col-md-12 mt-5">
						<div class="row align-items-center">
							<div class="col-md-9 text-left">
								<h2 class="post-title"><?php the_title(); ?></h2>
                        		<?php the_content(); ?>
							</div>
							<div class="col-md-3">
								<a class="text-uppercase" href="mailto:sulamita@cnph.com.br?subject=Informações sobre o Produto <?php the_title(); ?>" style="background:#ddd;padding:5px 30px;border-radius:15px;color:#000;">
									Contato
								</a>
							</div>
						</div>               
                    </div>
                </div>            
            </div>
        </div>
    </section>
    
    <?php endwhile; endif; ?>

<?php get_footer();?>