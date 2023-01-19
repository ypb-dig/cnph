<?php get_header();
	//Template Name: Produtos
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/produtos2.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
                </div>
                <div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/centro-cirurgico">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/centro-cirurgico-blue.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Centro Cirúrgico</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/equipamentos">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/08/icone_cme_v2.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">CME</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/controle-de-infeccao">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/controle-infeccao-blue.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Prevenção e Controle de Infecção</p>
									</a>
								</div>
							</div>			
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/higiene">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/higiene-blue.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Hotelaria, Higiene e Governança</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/emergencia">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/emergencia-blue.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Acesso Vascular</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/fisioterapia">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/fisioterapia-blue.png" style="max-height:85px">
										<p style="font-size:18px;font-weight:bold;color:#87868a">
											Terapia Respiratória
										</p>
									</a>
								</div>
							</div>						
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/tratamento-feridas">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/feridas-blue.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Cuidados com a Pele</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/novidades">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/08/icone_novidades.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Novidades</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 mb-4">
								<div class="icon text-center">
									<a href="<?php echo get_site_url(); ?>/categoria/catalogo">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/catalogo.png">
										<p style="font-size:18px;font-weight:bold;color:#87868a">Catálogo</p>
									</a>
								</div>
							</div>
						</div>
<!-- 						<div class="row mt-5">
							<div class="col-md-12 text-center">
								<a href="<?php echo get_site_url(); ?>/instrucoes-de-uso" style="background:#e6f5fe;color:#00348e;font-weight:bold;padding:10px;border-radius:15px;text-transform:uppercase">
									Acessar Instruções de Uso
								</a>
							</div>
						</div> -->
					</div>
				</div>
            </div>
        </section>

        
    <?php endwhile; endif; ?>

<?php get_footer();?>