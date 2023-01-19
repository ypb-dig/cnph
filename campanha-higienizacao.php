<?php get_header();
	//Template Name: Higienização
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/higiene_projeto.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<h2 style="color:#004394" class="p-3"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
                </div>
            </div>
        </section>
		
		<section class="form-projetos p-5" style="background:#00bdb0;color:#fff">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 class="text-center">Saiba mais sobre a Campanha:</h2>
						<?php echo do_shortcode('[contact-form-7 id="35" title="Formulário de Atendimento"]'); ?>
					</div>
				</div>
			</div>
		</section>
        
    <?php endwhile; endif; ?>

<?php get_footer();?>