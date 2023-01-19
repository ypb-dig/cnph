<?php get_header();
	//Template Name: Tecnovigilância
?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <!-- Masthead-->
        <header class="contato" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/tencovigilancia.jpg) ; padding: 15%; background-size: cover; background-position: center;">
		</header>
        <!-- Services-->
        <section class="page-section p-5" id="services">
            <div class="container">
                <div class="row text-center">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
                </div>
			</div>
		</section>
		<section class="form bg-light p-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<p class="text-center">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/envelope-blue.png" style="width:50px"><br><br>
									<strong>Para relatar algum problema relacionado ao uso de determinado produto, preencha 
										este formulário ou entre em contato através do
									<a href="mailto:sac@cnph.com.br" style="color:#51b6b0">sac@cnph.com.br</a></strong>
								</p>
							</div>
							<div class="col-md-8">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Nome</label>
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Cargo</label>
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Empresa</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Telefone</label>
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Endereço</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Email</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Código do produto e lote</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Data da ocorrência</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Houve danos á saúde?</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="exampleInputEmail1">Detalhes da Reclamação</label>
												<textarea class="form-control" rows="4"></textarea>
											</div>
										</div>
										<div class="col-md-12 text-center">
											<button type="submit" class="btn btn-primary">Enviar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        
    <?php endwhile; endif; ?>

<?php get_footer();?>