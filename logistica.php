<?php get_header();
	//Template Name: Logistica
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/logistica_projeto_cnph_V3.jpg) ; padding: 15%; background-size: cover; background-position: center;">
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
				<div class="row mt-3">
					<div class="col-md-8 offset-md-2">
						<div class="card produtos">
						    <div class="card-header text-left">
								RELATÓRIO TÉCNICO DE GERENCIAMENTO DE RESÍDUOS
							</div>
							<div class="card-body" style="background:#f7f7f8">
								<p class="card-text">
    								A instituição recebe mensalmente, ou conforme acordo, um Relatório Técnico de 
									Gerenciamento de Resíduos, contendo as informações, enumeradas a seguir, as quais 
									conferem segurança ao hospital, à CNPH e à Onira e ratificam a característica de 
									logística reversa do projeto.

								</p>
							</div>
							<div class="card-body" style="background:#edeef0">
								<p class="card-text">
    								1. Resíduos - Descrição detalhada dos materiais coletados.
								</p>
							</div>
							<div class="card-body" style="background:#f7f7f8">
								<p class="card-text">
    								2. Coleta – Condições de acondicionamento – Portaria 326/06 do INMETRO e Resolução ANTT 
									nº 420/04.
								</p>
							</div>
							<div class="card-body" style="background:#edeef0">
								<p class="card-text">
    								3. Transporte – Informações sobre a transportadora (Resolução ANTT nº 420 de 
									12.02.2014) e o veículo.
								</p>
							</div>
							<div class="card-body" style="background:#f7f7f8">
								<p class="card-text">
    								4. Destinação Final – Informação sobre o destino final e tratamento dos resíduos.
								</p>
							</div>
							<div class="text-center p-3">
								<p style="font-size:12px">
									<em>A operação do Projeto de Logística Reversa é realizada pela Onira, empresa 
									especializada em soluções ambientais.</em>
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