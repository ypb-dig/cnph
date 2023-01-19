<?php get_header();
	//Template Name: Projetos
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
         <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/projeto_cnph_V5.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
                </div>
				<div class="row mt-3">
					<div class="col-md-8 offset-md-2">
						<div class="card produtos">
						    <div class="card-header text-left">
								LOGÍSTICA REVERSA E SUSTENTABILIDADE
								<a href="<?php echo get_site_url(); ?>/logistica-reversa-e-sustentabilidade/" style="float:right;background:#003b90;color:#fff;font-size:12px;padding:5px 8px;border-radius:15px">Conhecer</a>
							</div>
							<div class="card-body">
								<p class="card-text">
    								Implantar a logística reversa, enfatizando a sustentabilidade e destinação final de 
									resíduos oriundos do uso dos produtos fornecidos pela CNPH e disponibilizar às 
									Instituições hospitalares condições e recursos adequados para a implantação de uma 
									“solução total”, proporcionando segurança e conforto para as partes envolvidas no 
									processo.
								</p>
							</div>
						</div>
						<div class="card produtos mt-3">
						    <div class="card-header text-left">
								CAMPANHA DE HIGIENIZAÇÃO DAS MÃOS
								<a href="<?php echo get_site_url(); ?>/campanha-de-higienizacao-das-maos" style="float:right;background:#003b90;color:#fff;font-size:12px;padding:5px 8px;border-radius:15px">Conhecer</a>
							</div>
							<div class="card-body">
								<p class="card-text">
    								Desenvolvida por meio da necessidade de aumentar a adesão dos profissionais à prática 
									da higienização das mãos de forma constante na rotina diária, estimulando essa prática 
									nos serviços de saúde, atendendo às exigências legais, éticas e contribuindo para a 
									melhoria da qualidade no atendimento e assistência ao paciente.
								</p>
							</div>
						</div>
						<div class="card produtos mt-3">
						    <div class="card-header text-left">
								EDUCAÇÃO CONTINUADA
								<a href="<?php echo get_site_url();?>/educacao-continuada" style="float:right;background:#003b90;color:#fff;font-size:12px;padding:5px 8px;border-radius:15px">Conhecer</a>
							</div>
							<div class="card-body">
								<p class="card-text">
    								O GIAM, Grupo de Incentivo ao Aperfeiçoamento Multiprofissional, onde o objetivo é 
									incentivar o processo de educação e desenvolvimento, estimulando a disseminação do 
									conhecimento técnico científico, compartilhamento de experiências e metodologias de 
									trabalho, bem como os aspectos relacionados às legislações, qualidade e segurança, 
									desenvolvimento tecnológico e novas tendências.
								</p>
							</div>
						</div>
						<div class="card produtos mt-3">
						    <div class="card-header text-left">
								CME EXPERIENCE
								<a href="<?php echo get_site_url(); ?>/cme-experience" style="float:right;background:#003b90;color:#fff;font-size:12px;padding:5px 8px;border-radius:15px">Conhecer</a>
							</div>
							<div class="card-body">
								<p class="card-text">
    								Oferecer à Instituição hospitalar uma linha completa de produtos para limpeza, preparo, 
									acondicionamento, esterilização e monitoramento dos processos realizados na CME, 
									atrelado a um pacote de soluções como validações de equipamentos, software de gestão de 
									CME, comodatos e treinamentos.
								</p>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		
        
    <?php endwhile; endif; ?>

<?php get_footer();?>