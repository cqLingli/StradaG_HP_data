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
		}
	endif;
	add_action( 'after_setup_theme', 'sp_theme_setup' );

	function adding_scripts() {
	  	/* script */
	  	wp_register_script('jquery_script', '//ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js');
      wp_register_script('slick_script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	  	wp_register_script('main_script', PARENT_JS . '/main.js', '' ,'', true);
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

?>