<?php get_header();
	//Template Name: Nosso Time
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/nosso-time.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
                </div>
            </div>
        </section>

        
    <?php endwhile; endif; ?>

<?php get_footer();?>