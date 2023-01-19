<?php get_header();
	//Template Name: Quem Somos
?>

        <!-- Masthead-->
         <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/06/banner-empresa-v2.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>		
                </div>
            </div>
        </section>
 
		<section class="page-section bg-light ">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/missao.png" class="">
						<div style="color:#004291;font-size:20px;padding:10px 0;font-weight:bold">Missão</div>
						<p>
							Oferecer produtos hospitalares
							de qualidade, aliados à inovação
							de conceito e suporte técnico especializado para a satisfação 
							do cliente e melhoria da saúde
							da população.
						</p>
					</div>
					<div class="col-md-4 text-center">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/visao.png" class="">
						<div style="color:#004291;font-size:20px;padding:10px 0;font-weight:bold">Visão</div>
						<p>
							Manter-se como referência no segmento médico-hospitalar, inovando, agregando valores e 
							superando as expectativas de nossos clientes.
						</p>
					</div>
					<div class="col-md-4 text-center">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/politica.png" class="">
						<div style="color:#004291;font-size:20px;padding:10px 0;font-weight:bold">Política de Qualidade</div>
						<p>
							Promover a excelência no fornecimento de produtos hospitalares e na prestação de serviços mediante o comprometimento
							dos colaboradores, buscando sempre a melhoria contínua.
						</p>
					</div>
				</div>
			</div>
		</section>
	
<!-- 		<section class="page-section mapa">
			<div class="container">
				<div class="row">
					 <div class="col-12 text-center mb-2">
                    	<h2 class="section-heading">Mapa de Atuação</h2>
                	</div>
					<div class="col-12 text-center mapa-atuacao">
						<p class="pb-4">
							Confira abaixo os contatos do nosso time de profissionais e sua área de atuação.<br>
Caso não encontre o que deseja, entre em contato!
						</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.9460268025746!2d-46.6218707855429!3d-23.57038186780931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce596f0af44a45%3A0x4f2500e5329dc29e!2sCNPH%20Comercial%20Nacional%20de%20Produtos%20Hospitalares!5e0!3m2!1spt-BR!2sus!4v1611674152428!5m2!1spt-BR!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</section> -->

<?php get_footer();?>