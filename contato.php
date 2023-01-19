<?php get_header();
	//Template Name: Contato
?>

        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/contato.jpg) ; padding: 15%; background-size: cover; background-position: center;">
        </header>
        <!-- Services-->
        <section class="page-section pb-5" id="services">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						<h2 class="text-center pb-2" style="color:#004291">Escolha uma opção para se comunicar</h2>
						<p class="text-center font__style">
							Faça perguntas, dê sugestões, tire suas dúvidas e venha interagir conosco.
							Nossa equipe pronta para ajudar com diversas possibilidades.
						</p>
						<p class="pt-3 text-center">
							<a href="mailto:marketing@cnph.com.br" style="background:#e6f5fe;color:#00348e;font-weight:bold;padding:10px;border-radius:15px">Enviar uma mensagem</a>
							<a href="<?php echo get_site_url(); ?>/tecnovigilancia" style="background:#e6f5fe;color:#00348e;font-weight:bold;padding:10px;border-radius:15px">Acessar Tecnovigilância</a>
							<a href="mailto:rh@cnph.com.br" style="background:#e6f5fe;color:#00348e;font-weight:bold;padding:10px;border-radius:15px">Enviar Currículo</a>
						</p>
					</div>
                </div>
            </div>
        </section>

		<section class="bg-light p-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-5 pt-3">
								<p>
									<strong>Onde estamos localizados:</strong><br>
									Rua Gama Cerqueira, 331 - 01539-010
									Cambuci - São Paulo - SP
								</p>
								<p>
									<strong>Você tambem pode ligar:</strong><br>
									+55 11 3385-9339
								</p>
								<p>
									<strong>Ou enviar um e-mail para o SAC:</strong><br>
									sac@cnph.com.br
								</p>
								<p>
									<strong>Horário de funcionamento:</strong><br>
									Segunda à sexta-feira<br>
									08h30 às 17h30
								</p>
							</div>
							<div class="col-md-7">
								<?php echo do_shortcode('[contact-form-7 id="35" title="Formulário de Atendimento"]') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!-- 		<section class="p-5 text-center">
			<a href="" class="text-uppercase" style="background:#b4e2ff;color:#00348e;font-weight:bold;padding:5px 15px;border-radius:15px;margin-right:20px">
				tecnovigilância <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/icone-email-blue.png" style="max-width:25px">
			</a>
			<a href="" class="text-uppercase" style="background:#b4e2ff;color:#00348e;font-weight:bold;padding:5px 15px;border-radius:15px">
				trabalhe conosco <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/icone-cafe-blue.png" style="max-width:25px">
			</a>
		</section> -->

		<section class="mapa mt-2 p-0" id="mapa">
			<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=CNPH&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</section>


<?php get_footer();?>