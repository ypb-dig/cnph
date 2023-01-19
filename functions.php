<?php 

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	add_filter( 'show_admin_bar', '__return_false' );
	/* REMOVE OPTIONS FROM MENU */

    if (!session_id()) {
        session_start();
    }

	/* REMOVE ADMIN BAR SITE */
	function remove_admin_bar_links() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('new-content');

	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

	// TITULO ESTRUTURADO PARA SEO WORDPRESS
	add_filter( 'wp_title', 'site_titlee' );
	function site_titlee( $title ) {
	  global $page, $paged;
	  if ( is_feed() )
	    return $title;
	  $site_description = get_bloginfo( 'description' );
	  $filtered_title = $title . get_bloginfo( 'name' );
	  $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	  $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	  return $filtered_title;
	}

	// SUPORTE DE IMAGEM DESTACADA WORDPRESS
	add_theme_support( 'post-thumbnails' );
	// SUPORTE DE EXCERPT EM PAGINAS
	add_post_type_support( 'page', 'excerpt' );
	
	// REGISTRO DE MENU WORDPRESS
	register_nav_menus( array(
		'menu_principal' => 'Menu Principal'
	) );
    

	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	function special_nav_class ($classes, $item) {
  		if (in_array('current-menu-item', $classes) ){
    		$classes[] = 'active ';
  		}
  		return $classes;
	}

	//PAGINATION

	function my_pagination() {
        global $wp_query;
        
        echo paginate_links( array(
            'base' => str_replace( 9999999999999, '%#%', esc_url( get_pagenum_link( 9999999999999 ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var( 'paged' ) ),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'prev_next' => true,
            'prev_text' => 'Página Anterior',
            'next_text' => 'Próxima Página',
            'before_page_number' => '-',
            'after_page_number' => '>',
            'show_all' => false,
            'mid_size' => 3,
            'end_size' => 1,
        ) );
    }


/* WIDGETS */
 
if (function_exists('register_sidebar'))
	{
		register_sidebar( array(
			'name' => 'Sidebar Post',
			'id' => 'sidebar-post',
			'before_widget' => '<div class="widget menu-side">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		) );
	
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'before_widget' => '<div class="widget menu-side">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		
		register_sidebar( array(
			'name' => 'Footer 1',
			'id' => 'footer-1',
			'before_widget' => '<div class="col-md-2">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) );
	
		register_sidebar( array(
			'name' => 'Footer 2',
			'id' => 'footer-2',
			'before_widget' => '<div class="col-md-2">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer 3',
			'id' => 'footer-3',
			'before_widget' => '<div class="col-md-2">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer 4',
			'id' => 'footer-4',
			'before_widget' => '<div class="col-md-2">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) );
	
		register_sidebar( array(
			'name' => 'Footer 5',
			'id' => 'footer-5',
			'before_widget' => '<div class="col-md-2">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer 6',
			'id' => 'footer-6',
			'before_widget' => '<div class="col-md-2">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) );
	
		register_sidebar( array(
			'name' => 'Copyright',
			'id' => 'copyright',
			'before_widget' => '<div class="col-md-8">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		) );
	}
 
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 30);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

?>