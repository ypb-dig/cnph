<!-- Footer-->
        <footer class="footer p-5" style="background:#fff">
            <div class="logo">
				<img src="<?php echo get_site_url() ?>/wp-content/uploads/2021/03/logo_CNPH.png" style="max-width:150px">
			</div>
			<div class="contato p-3">
				<i class="fa fa-phone" style="color:#01a3a7"></i> <strong style="padding-right:10px">+55 11 3385-9339</strong> 
				<i class="fa fa-envelope" style="color:#01a3a7;"></i> <strong>sac@cnph.com.br</strong> 
			</div>
			<div class="endereco">
				<i class="fa fa-map-marker" style="color:#01a3a7"></i> Rua Gama Cerqueira, 331 - 01539-010 <br> Cambuci - São Paulo - SP
			</div>
			<div class="redes-sociais">
				<a href="https://www.facebook.com/produtoscnph" target="_blank" style="color:#01a3a7;font-size:20px">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/produtoscnph/" target="_blank" style="color:#01a3a7;font-size:20px">
					<i class="fab fa-instagram-square"></i>
				</a>
				<a href="https://www.linkedin.com/company/cnph/" target="_blank" style="color:#01a3a7;font-size:20px">
					<i class="fab fa-linkedin"></i>
				</a>
				<a href="https://www.youtube.com/channel/UCVimFN2IuhkfcNPnN6ug4DQ" target="_blank" style="color:#01a3a7;font-size:20px">
					<i class="fab fa-youtube"></i>
				</a>
			</div>
        </footer>

		<section style="background:#032856;padding:10px">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="copyright text-white">
							Todos os Direitos reservados à CNPH
						</div>
					</div>
					<div class="col-md-6">
						<div class="copyright text-white text-right">
							Desenvolvido por: <a href="https://ypb.com.br" target="_blank">YPB Marketing Digital</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div style="position: fixed;right: 0px;top: 40%;z-index: 1;background: #fff;padding: 6px; border-radius: 5px;">
			<a href="https://www.facebook.com/produtoscnph" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/facebook.png" class="pb-2" style="width:25px">
			</a><br>
			<a href="https://www.instagram.com/produtoscnph/" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/instagram.png" class="pb-2" style="width:25px">
			</a><br>
			<a href="https://www.linkedin.com/company/cnph/" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/linkedin.png" class="pb-2" style="width:25px">
			</a><br>
			<a href="https://www.youtube.com/channel/UCVimFN2IuhkfcNPnN6ug4DQ" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/youtube.png" style="width:25px">
			</a>
		</div>
		
        <!-- Bootstrap core JS-->
		<?php wp_footer(); ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		<script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

		<script>
			$(document).ready(function(){
				$(".products").owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:true
						},
						600:{
							items:2,
							nav:false
						},
						1000:{
							items:1,
							nav:true,
							loop:false
						}
					}
				});
			});
		</script>

		<script>
			$(document).ready(function(){
				$(".owl-carousel").owlCarousel({
					loop:true,
					margin:15,
					autoplay:true,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:true
						},
						600:{
							items:2,
							nav:false
						},
						1000:{
							items:5,
							nav:true,
							loop:false
						}
					}
				});
			});
		</script>

    </body>
</html>
