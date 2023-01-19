<?php
	//Template Name: Onira Retira
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Onira Retira</title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css?26" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/style.css?22" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css" rel="stylesheet" />
		
		<?php wp_head(); ?>
		
    </head>
    
    <body style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/bg-header.jpg) no-repeat;background-size: cover;">
        <header class="mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2021/03/logo_CNPH.png" width="100px">
                    </div>
                    <div class="col-6 text-right">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2021/10/onira-logo.png" width="100px">
                    </div>
                </div>
            </div>
        </header>
        <section class="form p-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 style="color:#00348e;font-weight:700">#oniraretira</h1>
                        <h3 style="color:#00348e">Bem-vindo ao Projeto Onira Retira!</h3>
                        <p>Este projeto está baseado em normativas Federais e Estaduais relacionados a sustentabilidade e logística reversa, objetivando a economia circular.</p>
                        <h5 class="pt-3" style="color:#00348e">Preencha o cadastro abaixo e saiba mais.</h5>
                        <?php echo do_shortcode("[contact-form-7 id='1888' title='Formulário Onira Retira']"); ?>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2021/10/logistica-reversa.png" style="width:350px">
                    </div>
                </div>
            </div>
        </section>
    </body>
    
</html>





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