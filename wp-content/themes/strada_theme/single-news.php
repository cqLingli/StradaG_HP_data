<?php
$get_post_type_archive_link = get_post_type_archive_link('news');
session_start();
$page_type = $_SESSION['page_type'];
$url_type = $_SESSION['url_type'];

if($url_type){
    get_header($url_type);
}else{
    get_header();
}
if($url_type==="sz"){
    $get_post_type_archive_link = str_replace("news", "tax/taxnewslist", $get_post_type_archive_link);
}elseif ($url_type==="sg"){
    $get_post_type_archive_link = str_replace("news", "admin/adminnewslist", $get_post_type_archive_link);
}elseif ($url_type==="sb"){
    $get_post_type_archive_link = str_replace("news", "bs/bsnewslist", $get_post_type_archive_link);
}elseif ($url_type==="ch"){
    $get_post_type_archive_link = str_replace("news", "chushoukigyouroudou/chushoukigyouroudounewslist", $get_post_type_archive_link);
}elseif ($url_type==="tr"){
    $get_post_type_archive_link = str_replace("news", "taxria/taxrianewslist", $get_post_type_archive_link);
}elseif ($url_type==="ss"){
    $get_post_type_archive_link = str_replace("news", "sr/srnewslist", $get_post_type_archive_link);
}else{
    $get_post_type_archive_link = str_replace("news", "news", $get_post_type_archive_link);
}


?>
<main class="l-main p-new01">

    <div class="c-breakcrumds">
        <div class="l-container">
            <?php get_template_part('breadcrumb', 'all'); ?>
        </div>
    </div>
    <div class="c-mainTitle">
        <div class="c-mainTitle_content news_content_add">
            <div class="c-tlt01 c-tlt01__black">
                <h1 class="c-tlt01__line c-tlt01__line--gray">
                    ニュース
                    <span>NEWS</span>
                </h1>
            </div>
        </div>
    </div>
  <div class="c-new-content" >
    <div class="l-container">
      <div class="c-wrap-new p-news__post">
          <div style="height: 5px;"></div>
        <div class="content box">
            <div class="c-new__date"><?php echo get_the_date('Y.m.d') ?></div>
            <div class="single_title"><?php echo get_the_title(); ?></div>
            <div style="height: 30px;"></div>
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) { the_post();
                the_content();
              }
              wp_reset_query();
            }
          ?>
        </div>

        <a href="<?php echo $get_post_type_archive_link ?>" class="c-back-list">
            一覧へ戻る
            <span class="i-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/new02/i_arrow.svg" alt="" />
          </span>
        </a>
    </div>
    </div>

  </div>
</main>


<?php
$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
if(strpos($HTTP_REFERER,'taxria')){
    get_footer("tr");

}
elseif(strpos($HTTP_REFERER,'sr')){
    get_footer("ss");
}
elseif(strpos($HTTP_REFERER,'chushoukigyouroudou')){
    get_footer("ch");
}
elseif(strpos($HTTP_REFERER,'admin')){
    get_footer("sg");
}
elseif(strpos($HTTP_REFERER,'bs')){
    get_footer("sb");
}
elseif(strpos($HTTP_REFERER,'tax')){
    get_footer("sz");
}
else{
    get_footer();

}
 ?>
