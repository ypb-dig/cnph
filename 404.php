<?php get_header();?>
<section class="subheader">
  <div class="container">
    <h1>404 Error</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">404 Error</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module page-not-found">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h2>404</h2>
        <h3>Página não encontrada.</h3>
        <p>A página que você está procurando foi removida ou não existe. Tente usar o formulário de pesquisa abaixo.</p>
        
        <a href="<?php echo get_site_url(); ?>" class="button button-icon"><i class="fa fa-angle-right"></i>Voltar para a Home</a>
      </div>
    </div><!-- end row -->

  </div>
</section>
<?php get_footer();?>