<?php get_header();
	//Template Name: Area Atuação
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-8 offset-md-2">
					    <h1 class="mb-4">Mapa de Atuação</h1>
						<?php the_content(); ?>
					</div>
                </div>
            </div>
        </section>

        
    <?php endwhile; endif; ?>

<?php get_footer();?>