<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php wp_title(''); ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/logo_CNPH.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css?27" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/style.css?27" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css" rel="stylesheet" />
		
		<?php wp_head(); ?>
		
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6HCRYR1YS"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-B6HCRYR1YS');
		</script>
		
    </head>
	
	<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark pt-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo get_site_url() ?>" style="z-index: 222;">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/logo_CNPH.png" alt="" />
				</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" style="background:#004394">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="<?php echo get_site_url() ?>">Home</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo get_site_url() ?>/quem-somos" class="nav-link">A Empresa</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/time" class="nav-link">Nosso Time</a>
						</li>
						<li class="nav-item dropdown">
							<a href="<?php echo get_site_url() ?>/catalogo-produtos" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo get_site_url() ?>/catalogo-produtos">Categorias</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo get_site_url() ?>/instrucoes-de-uso">Instruções de Uso</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/eventos" class="nav-link">Eventos</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/iniciativas" class="nav-link">Iniciativas</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="<?php echo get_site_url() ?>/contato">Contato</a>
						</li>
						<li class="nav-item">
							<a class="nav-link platform" href="https://academy.cnph.com.br/" target="_blank">CNPH ACADEMY</a>
						</li>
						<li class="nav-item">
							<a class="nav-link platform" href="<?php echo get_site_url() ?>/lp/hands-safe" target="_blank">HANDS SAFE</a>
						</li>
                    </ul>
                </div>
<!-- 				<div class="redes" style="position: absolute;margin-top: -70px;right: 120px;">
					<a href="https://www.facebook.com/produtoscnph" target="_blank">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/facebook.png">
					</a>
					<a href="https://www.instagram.com/produtoscnph/" target="_blank">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/instagram.png">
					</a>
					<a href="https://www.linkedin.com/company/cnph/" target="_blank">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/linkedin.png">
					</a>
					<a href="https://www.youtube.com/channel/UCVimFN2IuhkfcNPnN6ug4DQ" target="_blank">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/icone_youtube_22.png" width="20px">
					</a>
				</div> -->
            </div>
        </nav>