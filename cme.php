<?php get_header();
	//Template Name: CME Experience
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
         <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/08/banner_cme_verde-azul_menor_v2.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
                </div>
				<div class="row mt-4">
					<div class="col-md-8 offset-md-2">
						<div class="card produtos">
						    <div class="card-header text-left">
								operação e benefícios
							</div>
							<div class="card-body" style="background:#f7f7f8">
								<p class="card-text">
    								• Monitoramento trimestral preventivo para cada equipamento;<br>
									• Treinamentos e implementação de ações sustentáveis;<br>
									• Educação continuada, através de treinamentos ministrados pelo Grupo de Incentivo ao 
									Aperfeiçoamento Multiprofissional – GIAM;<br>
									• Software completo de Gestão de CME
								</p>
							</div>
						</div>
						
						<div class="card produtos mt-3">
						    <div class="card-header text-left">
								RESULTADO
							</div>
							<div class="card-body" style="background:#f7f7f8">
								<p class="card-text">
    								• Melhor resultado;<br>
									• Melhor experiência do colaborador;<br>
									• Melhor custo de processos.
								</p>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		
		<section class="form-projetos p-5" style="background:#00bdb0;color:#fff">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 class="text-center">Saiba mais sobre o Projeto:</h2>
						<?php echo do_shortcode('[contact-form-7 id="35" title="Formulário de Atendimento"]'); ?>
					</div>
				</div>
			</div>
		</section>
        
    <?php endwhile; endif; ?>

<?php get_footer();?>