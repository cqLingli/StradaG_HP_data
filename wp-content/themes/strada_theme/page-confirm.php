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
      <?php get_template_part('breadcrumb', 'all'); ?>
    </div>
  </div>
    <!-- end c-breakcrumds -->
  <div class="c-mainTitle service_1-mainTitle">
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
                    
             <?php if($url_type==="sz") : ?>
                    <a href="<?php echo home_url()."/tax/"; ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php elseif($url_type==="sg") : ?>
                    <a href="<?php echo home_url()."/admin/"; ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php elseif($url_type==="sb") : ?>
                    <a href="<?php echo home_url()."/bs/"; ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php elseif($url_type==="ch") : ?>
                    <a href="<?php echo home_url()."/chushoukigyouroudou/"; ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php elseif($url_type==="tr") : ?>
                    <a href="<?php echo home_url()."/taxria/"; ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php elseif($url_type==="ss") : ?>
                    <a href="<?php echo home_url()."/sr/"; ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php else : ?>
                    <a href="<?php echo home_url(); ?>">
                        <span>TOPページへ戻る</span>
                    </a>
            <?php endif; ?>
                    
                    
                    
            
                </div>
                
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