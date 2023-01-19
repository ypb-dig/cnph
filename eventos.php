<?php get_header();
	//Template Name: Eventos
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
        <header class="evento" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/evento.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
                </div>
				<div class="row mt-3">
					<div class="col-md-8 offset-md-2">
						<?php
							if( have_rows('evento') ):
							while ( have_rows('evento') ) : the_row();
							if( get_row_layout() == 'evento_box' ):
						?>
						<div class="row d-flex align-items-center mt-3" style="background: #e0f2fe;">
							<div class="col-md-2 text-center" style="background:#86a8d0;color:#fff;font-size:18px;font-weight:bold;padding:15px 5px">
								<?php the_sub_field('data_evento'); ?>
							</div>
							<div class="col-md-8" style="background:#e0f2fe;padding:10px 20px">
								<?php the_sub_field('descricao_evento'); ?>
							</div>
							<div class="col-md-2 text-center">
								<a href="<?php the_sub_field('link_evento'); ?>" class="text-uppercase" style="background:#033d84;color:#fff;border-radius:15px;padding:5px 10px" target="_blank">Saiba Mais</a>
							</div>
						</div>
						<?php endif;endwhile;endif;?>
					</div>
				</div>
            </div>
        </section>
		
        
    <?php endwhile; endif; ?>

<?php get_footer();?>