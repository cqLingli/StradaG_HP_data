<?php
if ( basename( $_SERVER['SCRIPT_NAME'] ) === basename(__FILE__) ) {
  exit;
}

define( 'THEME',  get_option( 'stylesheet' ) );
define( 'PARENT',  get_parent_theme_file_uri() );
define( 'PARENT_CSS',  PARENT . '/assets/css' );
define( 'PARENT_JS',  PARENT . '/assets/js' );
define( 'PARENT_INC',  get_parent_theme_file_path() . '/inc' );

/*---------------------------------------------------------------------------
 * バージョンチェック
 *---------------------------------------------------------------------------*/
$php_ver_compare = version_compare( PHP_VERSION, '5.4', '<' );
$wp_ver_compare  = version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' );

if ( $php_ver_compare || $wp_ver_compare ) {
    require PARENT_INC . '/back-compat.php';
    if( false !== defined( 'WP_DEFAULT_THEME' ) ) {
    switch_theme( WP_DEFAULT_THEME );
  } else {
    switch_theme( 'default' );
  }
  return;
}

/*---------------------------------------------------------------------------
 * グローバル変数
 *---------------------------------------------------------------------------*/
$godios = get_option( 'theme_mods_' . THEME );


/*---------------------------------------------------------------------------
 * オプション
 *---------------------------------------------------------------------------*/
/**
	* Dequeue jQuery Migrate script in WordPress.
*/
function isa_remove_jquery_migrate( &$scripts) {
	if(!is_admin()) {
		$scripts->remove( 'jquery');
	}
}

function theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'グローバルナビゲーション', '' ),
    'footer'    => __( 'フッターメニュー', '' ),
	) );

}
add_action( 'after_setup_theme', 'theme_setup' );


function adding_scripts() {
  /* script */
  wp_register_script('jquery_script', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
  wp_register_script('slick_script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
  wp_register_script('lib_script', PARENT_JS . '/lib.js', '' ,'', true);
//   wp_register_script('slider_script', PARENT_JS . '/slider.js', '' ,'', true);
  wp_register_script('common_script', PARENT_JS . '/main.js', '' ,'', true);
  wp_enqueue_script('jquery_script');
  wp_enqueue_script('slick_script');
  wp_enqueue_script('lib_script');
  wp_enqueue_script('slider_script');
  wp_enqueue_script('common_script');

  /* style */
  wp_register_style('reset', PARENT_CSS . '/reset.css');
  wp_register_style('icon', PARENT_CSS . '/fontello.css');
  wp_register_style('sidebar', PARENT_CSS . '/sidebar.css');
  wp_register_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('reset');
  wp_enqueue_style('icon');
  wp_enqueue_style('slick');
  wp_enqueue_style('sidebar');
  wp_enqueue_style( 'site-css', get_stylesheet_directory_uri() .'/assets/css/style.css', array(), filemtime(get_stylesheet_directory() .'/assets/css/style.css'), 'all' );
  wp_register_style('fontawesomecss', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
  wp_enqueue_style('fontawesomecss');

}
add_action( 'wp_enqueue_scripts', 'adding_scripts' );  

/* 投稿画面のタイトルに文字カウンター */

remove_filter( 'the_content', 'wpautop' );

function sidebarinit() {

 //  register_sidebar( array(
  //  'name'          => __( 'フッター', '' ),
  //  'id'            => 'footer-sidebar',
  //  'description'   => __( 'フッターに表示させたい項目をいれてください。', '' ),
  //  'before_widget' => '<div id="%1$s" class="c-footerSidebar %2$s">',
  //  'after_widget'  => '</div>',
  //  'before_title'  => '<h4>',
  //  'after_title'   => '</h4>',
  // ) );
  register_sidebar( array(
    'name'          => __( 'サイドバー', '' ),
    'id'            => 'right-col-sidebar',
    'description'   => __( 'サイドバーに表示させたい項目をいれてください。', '' ),
    'before_widget' => '<div id="%1$s" class="c-rightColSidebar sidebar-main %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
  ) ); 
  register_sidebar( array(
    'name' => 'サイドバー追尾【PC】',
    'id' => 'sidebar-tracking',
    'description' => 'PCだけに表示される追尾用のウィジットエリアです。',
    'before_widget' => '<section id="%1$s" class="c-rightColSidebar sidebar-main sidebar-main_fixed %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
  ) );

}
add_action( 'widgets_init', 'sidebarinit' );

require PARENT_INC . '/breadcrumb.php';

require PARENT_INC . '/widget-popular_post.php';

require PARENT_INC . '/widget-profile.php';

require PARENT_INC . '/widget-ranking.php';

require PARENT_INC . '/widget-recent_post.php';

require PARENT_INC . '/widget-slogan.php';

require PARENT_INC . '/widget-category.php';

require PARENT_INC . '/view.php';

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
         echo '<a class="pn-prev" href="'.get_pagenum_link($paged - 1).'">< 前へ</a>';
     }
      for ($i=1; $i <= $pages; $i++)
      {
          if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
          {
              echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a href="'.get_pagenum_link($i).'" class="pn-numbers">'.$i.'</a>';
          }
      }
     if($paged < $pages){
         echo '<a class="pn-next" href="'.get_pagenum_link($paged + 1).'">次へ ></a>';
     }
     if($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
         echo '<a class="m-next" href="'.get_pagenum_link($pages).'">>></a>';
     }
     echo '</p></div>'."\n";
 }
}

add_filter( 'the_content', 'add_breadcrumb_topage');
function add_breadcrumb_topage($content){
	if(is_page()){
		if($content){
			$breadcrumb = breadcrumb(true);
			$pos = strpos($content, 'c-breadcrumb_wr">', 0);
			$content = substr_replace($content, $breadcrumb, $pos+17, 0);
		}
	}
	return $content;
}

// function wp_maintenance_mode() {
// if (!current_user_can('edit_themes') || !is_user_logged_in()) {
// wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
// }
// }
// add_action('get_header', 'wp_maintenance_mode');
?>