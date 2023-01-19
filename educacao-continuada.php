<?php get_header();
	//Template Name: Educação Continuada
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/educacao_continuada.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<h2 style="color:#004394" class="p-3">
							Encontros mensais destinados<br> a profissionais da área da saúde
						</h2>
						<?php the_content(); ?>
					</div>
                </div>
				<div class="row mt-3">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-md-6">
								<div class="card produtos">
									<div class="card-header text-left">
										Sobre
									</div>
									<div class="card-body" style="background:#f7f7f8">
										<p class="card-text">
											O GIAM é um grupo que foi criado em 2013 por profissionais da área da saúde com 
											o objetivo principal de discutir cientificamente os assuntos relacionados a 
											assistência, prestados especificamente pelas áreas de centro cirúrgico, centro 
											de material e esterilização, recuperação pós anestésica e prevenção e controle 
											de infecção.<br><br>
											
											Com a finalidade de profissionalizar o aprimoramento multiprofissional, no 
											início de 2017 constituiu-se a empresa GIAM com a missão de incentivar o 
											processo de educação e desenvolvimento, por meio da promoção de eventos 
											nacionais e ternacionais, estimulando a disseminação do conhecimento técnico 
											científico, compartilhamento de experiências e metodologias de trabalho, bem 
											como os aspectos relacionados às legislações, qualidade e segurança, 
											desenvolvimento tecnológico e novas tendências.<br><br>
											
											No decorrer destes cinco anos o GIAM vem realizando encontros científicos 
											mensais; cursos direcionados às equipes multiprofissionais em centro de 
											material e esterilização e treinamento com capacitação técnica e operacional in 
											company para atender os requisitos de boas práticas e as exigências legais.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card produtos">
									<div class="card-header text-left">
										Como funciona
									</div>
									<div class="card-body" style="background:#f7f7f8">
										<p class="card-text">
											O GIAM, Grupo de Incentivo ao Aperfeiçoamento Multiprofissional, realiza 
											mensalmente encontros voltados para as áreas de Centro Cirúrgico, Central de 
											Material e Esterilização, Recuperação Pós Anestésica, Prevenção e Controle de 
											Infecção e agora Fisioterapia!<br><br>
											
											Onde o objetivo é incentivar o processo de educação e desenvolvimento, 
											estimulando a disseminação do conhecimento técnico científico, compartilhamento 
											de experiências e metodologias de trabalho, bem como os aspectos relacionados 
											às legislações, qualidade e segurança, desenvolvimento tecnológico e novas 
											tendências.<br><br>
											
											Os encontros mensais do GIAM são destinados apenas para profissionais da área 
											da saúde, convidados por meio de convites pessoais e intransferíveis, devendo 
											confirmar presença por conta de vagas limitadas.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-12">
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/giam.png" align="left">
								<p style="padding: 10px 30px;text-align: center;">
									Os encontros do GIAM Fisio são realizados bimestralmente, destinados a Fisioterapeutas, 
									abordando temas relevantes e atuais ministrados por profissionais da área.
								</p>
							</div>
						</div>
						<div class="row d-flex align-items-center mt-3" style="background: #e0f2fe;">
							<div class="col-md-2 text-center" style="background:#86a8d0;color:#fff;font-size:20px;font-weight:bold;padding:15px 5px">
								11 MAR 2019
							</div>
							<div class="col-md-8" style="background:#e0f2fe;padding:10px 20px">
								<b>Tema:</b> Mitos e Verdades sobre Sistemas de Aspiração Aberto e Fechado<br>
								<b>Palestrante:</b> Fisioterapeuta George Sarmento
							</div>
							<div class="col-md-2 text-center">
								<a href="http://www.youtube.com/watch?v=JE88J6WQ9ZQ" class="text-uppercase" style="background:#033d84;color:#fff;border-radius:15px;padding:5px 10px" target="_blank">Assistir <i class="fa fa-play"></i></a>
							</div>
						</div>
						
						<div class="row d-flex align-items-center mt-3" style="background: #e0f2fe;">
							<div class="col-md-2 text-center" style="background:#86a8d0;color:#fff;font-size:20px;font-weight:bold;padding:15px 5px">
								07 MAI 2019
							</div>
							<div class="col-md-8" style="background:#e0f2fe;padding:10px 20px">
								<b>Tema:</b> PAV Pacote de Soluções Ideal<br>
								<b>Palestrante:</b> Enfermeiro Leandro Hilário
							</div>
							<div class="col-md-2 text-center">
								<a href="https://youtu.be/AC62l4pyW3I" class="text-uppercase" style="background:#033d84;color:#fff;border-radius:15px;padding:5px 10px" target="_blank">Assistir <i class="fa fa-play"></i></a>
							</div>
						</div>
						
						<div class="row d-flex align-items-center mt-3" style="background: #e0f2fe;">
							<div class="col-md-2 text-center" style="background:#86a8d0;color:#fff;font-size:20px;font-weight:bold;padding:15px 5px">
								02 JUL<br> 2019
							</div>
							<div class="col-md-8" style="background:#e0f2fe;padding:10px 20px">
								<b>Tema:</b> Atuação da Fisioterapia no Protocolo da Cirurgia Torácica<br>
								<b>Palestrante:</b> Fisioterapeutas Wendell Rodrigo Ramos e Andréa Oliver Gomes
							</div>
							<div class="col-md-2 text-center">
								<a href="https://youtu.be/MSuw82bWR-M" class="text-uppercase" style="background:#033d84;color:#fff;border-radius:15px;padding:5px 10px" target="_blank">Assistir <i class="fa fa-play"></i></a>
							</div>
						</div>
						
						<div class="row d-flex align-items-center mt-3" style="background: #e0f2fe;">
							<div class="col-md-2 text-center" style="background:#86a8d0;color:#fff;font-size:20px;font-weight:bold;padding:15px 5px">
								10 SET<br> 2019
							</div>
							<div class="col-md-8" style="background:#e0f2fe;padding:10px 20px">
								<b>Tema:</b> O Manejo do Paciente com Cânula de Traqueostomia: uma Visão 
								Interdisciplinar<br>
								<b>Palestrante:</b> Luzimar Martins Machado e Luciana Paiva Farias
							</div>
							<div class="col-md-2 text-center">
								<a href="https://youtu.be/MGmYrxoIl_w" class="text-uppercase" style="background:#033d84;color:#fff;border-radius:15px;padding:5px 10px" target="_blank">Assistir <i class="fa fa-play"></i></a>
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