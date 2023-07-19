<?php
get_header();
/* Template Name: Recruit Form */
?>
  <!-- .l-main | メインコンテンツ -->
  <main class="l-main p-contact">
    <div class="c-breakcrumds">
      <div class="l-container">
        <?php if (function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>
    <!-- end c-breakcrumds -->
    <div class="c-mainTitle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
          採用情報
            <span>RECRUIT</span>
          </h1>
        </div>
      </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="l-container">
        <div class="contactBox">
            <!-- <div class="contactBox__intro">
                無料相談をご希望の方は以下より事前予約して下さい。<br/>担当者より折り返しご連絡させていただきます。<br/>
                ※メールでのご相談は受け付けておりません。
            </div> -->
            <?php 
                if(is_page('form1')){
                    echo do_shortcode('[mwform_formkey key="533"]');
                }else if(is_page('form2')){
                    echo do_shortcode('[mwform_formkey key="545"]');
                }else if(is_page('form3')){
                    echo do_shortcode('[mwform_formkey key="546"]');
                }
                
            ?>
        </div>
    </div>
  </main>
<?php get_footer(); ?>
<script type="text/javascript">
    jQuery(function($){
        $( ".error" ).each(function( i ) {
            $(this).closest('.row').addClass('is-error');
        });
    });
</script>