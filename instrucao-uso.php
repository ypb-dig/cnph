<?php get_header();
	//Template Name: Instruções de Uso
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- Masthead-->
         <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/08/banner_instrucoes-de-uso.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 style="color:#004394" class="p-3 text-center"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
                </div>
            </div>
        </section>
		
        
    <?php endwhile; endif; ?>

<?php get_footer();?>