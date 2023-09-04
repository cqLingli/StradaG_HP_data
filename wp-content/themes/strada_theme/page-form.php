<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_header($url_type);
}else{
    get_header();
}
/* Template Name: Recruit Form */
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle service_1-mainTitle">
    <div class="c-mainTitle_content service_content_add">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
            採用情報
          <span>RECRUIT</span>
        </h1>
      </div>
    </div>
  </div>


  
    <div class="c-new-content">
  <div class="l-content">
    <div class="l-container">
        <div class="l-reciuit">
            <?php 
                if(is_page('recruitformsz')){
                    echo do_shortcode('[mwform_formkey key="4093"]');
                }else if(is_page('recruitformsb')){
                    echo do_shortcode('[mwform_formkey key="4092"]');
                }else if(is_page('recruitformsg')){
                    echo do_shortcode('[mwform_formkey key="4094"]');
                }
                
            ?>
        </div>
    </div>
  </div>
</main>


<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_footer($url_type);
}else{
    get_footer();
}
?>


<script type="text/javascript">
    jQuery(function($){
        $( ".error" ).each(function( i ) {
            $(this).closest('.row').addClass('is-error');
        });
    });
</script>