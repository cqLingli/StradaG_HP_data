<?php
	if ( basename( $_SERVER['SCRIPT_NAME'] ) === basename(__FILE__) ) {
	  exit;
	}

	/*------------------------------------------------------------
	テーマフォルダへのパスを定数でどこからでも使えるようにしておく
	------------------------------------------------------------*/
	define( 'THEME',  get_option( 'stylesheet' ) );
	define( 'PARENT',  get_parent_theme_file_uri() );
	define( 'PARENT_JS',  PARENT . '/js' );
	define("THEME_URL", get_template_directory_uri() . "/");
	define( 'PARENT_INC',  get_parent_theme_file_path() . '/inc' );

	if ( ! function_exists( 'sp_theme_setup' ) ) :

		function sp_theme_setup() {

			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'title-tag' );

			add_theme_support( 'post-thumbnails' );

			add_image_size( 'post-size', 700, 446, true );
		}
	endif;
	add_action( 'after_setup_theme', 'sp_theme_setup' );

	function adding_scripts() {
	  	/* script */
	  	wp_register_script('jquery_script', '//ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js');
      wp_register_script('slick_script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	  	wp_register_script('main_script', PARENT_JS . '/common.js', '' ,'', true);
	  	wp_enqueue_script('jquery_script');
      wp_enqueue_script('slick_script');
	  	wp_enqueue_script('main_script');
	}
	add_action( 'wp_enqueue_scripts', 'adding_scripts' );

  // ショートコード
	function src_code() { // テーマディレクトリURL
  	return esc_url(get_template_directory_uri());
	}
	add_shortcode('src', 'src_code');
	add_shortcode('TMPURL', 'src_code');

   // ショートコード
  function url_code() { // テーマディレクトリURL
    return esc_url(home_url());
  }
  add_shortcode('url', 'url_code');

	function my_wp_kses_allowed_html($tags, $context) { // srcsetでショートコードを有効
  	$tags['source']['srcset'] = true;
  	$tags['source']['src'] = true;
  	return $tags;
	}
	add_filter('wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2);

  //phpファイルをショートコードで呼び出し
  function my_php_Include($params = array()) {
      extract(shortcode_atts(array('file' => 'default'), $params));
      ob_start();
      include(get_theme_root() . '/' . get_template() . "/template/$file.php");
      return ob_get_clean();
  }
  add_shortcode('myphp', 'my_php_Include');
function sidebarinit() {
	register_sidebar( array(
		'name'          => __( 'サイドバー', '' ),
		'id'            => 'widget-sidebar',
		'description'   => __( 'Add widgets here to appear in your footer.', '' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="c-tlt04">',
		'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'sidebarinit' );

	/* View */
	require PARENT_INC . '/view.php';

	/* Widget: Recent */
	require PARENT_INC . '/widget-recent_post.php';

	/* Widget: Popular */
	require PARENT_INC . '/widget-popular_post.php';

	/* Widget: Popular */
	require PARENT_INC . '/widget-category.php';

	/* Widget: Popular */
	require PARENT_INC . '/widget-ranking.php';

add_filter('bcn_after_fill', 'my_static_breadcrumb_adder');
function my_static_breadcrumb_adder($breadcrumb_trail) {
 	if(is_single() && 'post' == get_post_type() ||  is_category() && 'post' == get_post_type()){
		$url = home_url('columns');
		$new_breadcrumb = new bcn_breadcrumb('お役立ち情報', NULL, array('columns'), $url, NULL, true);
		array_splice($breadcrumb_trail->breadcrumbs, -1, 0, array($new_breadcrumb));
	}
}

## Remove Taxonomy Members Slug ##
function remove_tax_slug_link( $link, $term, $taxonomy ) {
    if ( $taxonomy !== 'taxonomy_position' )
        return $link;
 
    return str_replace( 'taxonomy_position/', '', $link );
}
add_filter( 'term_link', 'remove_tax_slug_link', 10, 3 );
 
function custom_tax_rewrite_rule() {
	$cats = get_terms(
			'taxonomy_position', array(
			'hide_empty' => false,
		)
	);
	if(sizeof($cats)){
		foreach($cats as $cat){
			add_rewrite_rule( '^members/'. $cat->slug .'/?$', 'index.php?taxonomy_position='. $cat->slug .'', 'top' );
		}
	}			
}
add_action('init', 'custom_tax_rewrite_rule', 9, 0);

function action_create_taxonomy( $term_id, $tt_id ) { 
    $cat = get_term_by('id', $term_id, 'taxonomy_position');
	add_rewrite_rule( '^members/'. $cat->slug .'/?$', 'index.php?taxonomy_position='. $cat->slug .'', 'top' );
	flush_rewrite_rules();
}; 
         
add_action( "create_taxonomy_position", 'action_create_taxonomy', 10, 2 ); 
add_action( "edited_taxonomy_position", 'action_create_taxonomy', 10, 2 ); 

## End Remove Taxonomy Members Slug ##

function pagination($pages = '', $range = 1){
	$showitems = ($range * 2)+1;
	if(is_home()) {
	  $paged = get_query_var('paged');
	} else {
	  global $paged;
	}
	if(empty($paged)) $paged = 1;
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) $pages = 1;
	}
	if(1 != $pages){
	   echo '<div class="pagination">';
	   echo '<p class="inner">';
	   echo '<span class="page-of">'.$paged."/".$pages.'</span>';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages){
		   echo '<a class="m-prev" href="'.get_pagenum_link(1).'"><<</a>';
	   }
	   if($paged > 1){
		   echo '<a class="pn-prev" href="'.get_pagenum_link($paged - 1).'"><</a>';
	   }
		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a href="'.get_pagenum_link($i).'" class="pn-numbers">'.$i.'</a>';
			}
		}
	   if($paged < $pages){
		   echo '<a class="pn-next" href="'.get_pagenum_link($paged + 1).'">></a>';
	   }
	   if($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
		   echo '<a class="m-next" href="'.get_pagenum_link($pages).'">>></a>';
	   }
	   echo '</p></div>'."\n";
   }
}

function add_custom_pt( $query ) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ( is_post_type_archive('voice') ) {
      $query->set( 'posts_per_page', 12 );
    }
  }
}
add_action( 'pre_get_posts', 'add_custom_pt' );


## Remove Taxonomy Service Slug ##
function remove_tax_service_slug_link( $link, $term, $taxonomy ) {
    if ( $taxonomy !== 'taxonomy_service' )
        return $link;
 
    return str_replace( 'taxonomy_service/', '', $link );
}
add_filter( 'term_link', 'remove_tax_service_slug_link', 10, 3 );
 
function custom_tax_service_rewrite_rule() {
	$cats = get_terms(
			'taxonomy_service', array(
			'hide_empty' => false,
		)
	);
	if(sizeof($cats)){
		foreach($cats as $cat){
			add_rewrite_rule( '^service/'. $cat->slug .'/?$', 'index.php?taxonomy_service='. $cat->slug .'', 'top' );
		}
	}			
}
add_action('init', 'custom_tax_service_rewrite_rule', 9, 0);

function action_create_taxonomy_service( $term_id, $tt_id ) { 
    $cat = get_term_by('id', $term_id, 'taxonomy_service');
	add_rewrite_rule( '^service/'. $cat->slug .'/?$', 'index.php?taxonomy_service='. $cat->slug .'', 'top' );
	flush_rewrite_rules();
}; 
         
add_action( "create_taxonomy_service", 'action_create_taxonomy_service', 10, 2 ); 
add_action( "edited_taxonomy_service", 'action_create_taxonomy_service', 10, 2 ); 
## End Taxonomy Service Slug ##

function my_acf_load_tax_for_single_service( $field ) {		
	global $post;
	$term_list = wp_get_post_terms($post->ID, 'taxonomy_service');
	foreach($term_list as $term){		
		$key = $term->slug;
		$val = $term->name;
		$field['choices'] = array_merge($field['choices'], array(
			$key => $val
		));
	}
	// $key =  get_post_field( 'post_name', get_post() );

	// $val = get_the_title();
	// $field['choices'] = array_merge($field['choices'], array(
	// 	$key => $val
	// ));
    return $field;
}

add_filter('acf/prepare_field/name=s_repeat_taxonomy', 'my_acf_load_tax_for_single_service');

function set_menu_order_service_tax($query){         
	if ( is_tax('taxonomy_service') ) {		 
		$query->set( 'orderby', 'menu_order' );
		$query->set( 'order', 'asc' );
	}
}
add_action('pre_get_posts','set_menu_order_service_tax');
?>