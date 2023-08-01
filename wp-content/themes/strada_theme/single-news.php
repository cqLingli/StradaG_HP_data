<?php
$get_post_type_archive_link = get_post_type_archive_link('news');
$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
if(strpos($HTTP_REFERER,'taxria')){
    get_header("tr");
    $get_post_type_archive_link = str_replace("news", "taxria/taxrianewslist", $get_post_type_archive_link);

}
elseif(strpos($HTTP_REFERER,'sr')){
    get_header("ss");
    $get_post_type_archive_link = str_replace("news", "srnewslist", $get_post_type_archive_link);
}
elseif(strpos($HTTP_REFERER,'chushoukigyouroudou')){
    get_header("ch");
    $get_post_type_archive_link = str_replace("news", "chushoukigyouroudounewslist", $get_post_type_archive_link);
}
elseif(strpos($HTTP_REFERER,'admin')){
    get_header("sg");
    $get_post_type_archive_link = str_replace("news", "adminnewslist", $get_post_type_archive_link);
}
elseif(strpos($HTTP_REFERER,'bs')){
    get_header("sb");
    $get_post_type_archive_link = str_replace("news", "bsnewslist", $get_post_type_archive_link);
}
else{
    get_header("sz");
    $get_post_type_archive_link = str_replace("news", "tax/taxnewslist", $get_post_type_archive_link);

}

?>
<main class="l-main p-new01">

    <div class="c-breakcrumds">
        <div class="l-container">
            <?php if (function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="c-mainTitle">
        <div class="c-mainTitle_content">
            <div class="c-tlt01 c-tlt01__black">
                <h1 class="c-tlt01__line c-tlt01__line--gray">
                    ニュース
                    <span>NEWS</span>
                </h1>
            </div>
        </div>
    </div>
  <div class="c-new-content">
    <div class="l-container">
      <div class="c-wrap-new p-column__post" style="width:100%; max-width:100%; margin-bottom:0;">
        <div class="c-new__date"><?php echo get_the_date('Y.m.d') ?></div>
        <div class="single_title"><?php echo get_the_title(); ?></div>
        <div class="content box">
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) { the_post();
                the_content();
              }
              wp_reset_query();
            }
          ?>
        </div>
      </div>
    </div>
      <a href="<?php echo $get_post_type_archive_link ?>" class="c-back-list">
          一覧へ戻る
          <span class="i-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/new02/i_arrow.svg" alt="" />
          </span>
      </a>
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
else{
    get_footer("sz");

}
 ?>