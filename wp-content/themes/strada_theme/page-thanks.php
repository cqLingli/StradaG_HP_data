<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_header($url_type);
}else{
    get_header();
}
$thisurl = home_url(add_query_arg(array()));
?>
  <!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php get_template_part('breadcrumb', 'all');?>
    </div>
  </div>
    <!-- end c-breakcrumds -->
  <div class="c-mainTitle service_1-mainTitle2">
    <div class="c-mainTitle_content service_content_add">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
            <?php if(strpos($thisurl,'recruit')) : ?>
              ご応募頂き、ありがとうございます。
            <?php else : ?>
              お問い合わせ頂き、ありがとうございます。
            <?php endif; ?>

            <span>
              <?php if(strpos($thisurl,'recruit')) : ?>
                RECRUIT
              <?php else : ?>            
                CONTACT
              <?php endif; ?>
            </span>
          </h1>
        </div>
      </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="c-new-content">
  <div class="l-content">
    <div class="l-container">
                <div class="l-thanks">
            <figure class="ico">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/thanks-icon.png" width="120" alt="">
                </figure>
                <p>
                ご入力いただきましたメールアドレスに、<br>
                <?php if(strpos($thisurl,'recruit')): ?>
                応募完了メールをお送りいたしました。
                <?php else: ?>
                お問い合わせ完了メールをお送りいたしました。
                <?php endif; ?>
                <br><br>

                メールが届かない場合は、ご入力いただいたメールアドレスが間違っている可能性がございます。<br>
                お手数ですが、今一度ご入力内容をご確認の上ご連絡いただけましたら幸いです。<br><br>

                担当者からは、【24時間以内】のご連絡いたします。<br>
                なお、24時間以上経っても連絡がない場合、お手数ですが、再度お問い合わせいただくようお願い致します。<br>
                祝祭日の関係でご連絡が遅くなることがありますので、予めご了承ください。
                </p>
                <br/>
                
                <div class="c-btn01 c-btn01__center c-btn01__blue">
                    <a href="<?php echo home_url(); ?>">
                        <span>TOPページへ戻る</span>
                    </a>
                </div>
                
                
    <?php 
        if(strpos($thisurl,'recruit')){
            if($url_type==""){
                
            }elseif($url_type==="sz"){
                echo do_shortcode('[mwform_formkey key="4093"]');
            }elseif ($url_type==="sg"){
                echo do_shortcode('[mwform_formkey key="4094"]');
            }elseif ($url_type==="sb"){
                echo do_shortcode('[mwform_formkey key="4092"]');
            }elseif ($url_type==="ch"){
                
            }elseif ($url_type==="tr"){
                echo do_shortcode('[mwform_formkey key="4606"]');
            }elseif ($url_type==="ss"){
                
            }
        }else{
            if($url_type==""){
                echo do_shortcode('[mwform_formkey key="236"]');
            }elseif($url_type==="sz"){
                echo do_shortcode('[mwform_formkey key="3832"]');
            }elseif ($url_type==="sg"){
                echo do_shortcode('[mwform_formkey key="3997"]');
            }elseif ($url_type==="sb"){
                echo do_shortcode('[mwform_formkey key="3998"]');
            }elseif ($url_type==="ch"){
                echo do_shortcode('[mwform_formkey key="3996"]');
            }elseif ($url_type==="tr"){
                echo do_shortcode('[mwform_formkey key="3999"]');
            }elseif ($url_type==="ss"){
                echo do_shortcode('[mwform_formkey key="3923"]');
            }
        }
    ?>
                </div>
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
} ?>