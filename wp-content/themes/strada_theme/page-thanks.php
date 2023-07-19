<?php
get_header();
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
            <?php if(is_page(534)) : ?>
              ご応募頂き、ありがとうございます。
            <?php else : ?>
              お問い合わせ頂き、ありがとうございます。
            <?php endif; ?>

            <span>
              <?php if(is_page(534)) : ?>
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
    <div class="l-container">
        <div class="contactBox">
            <div class="contactBox__thanks">
            <figure class="ico">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/thanks-icon.png" width="120" alt="">
                </figure>
                <p>
                ご入力いただきましたメールアドレスに、<br>
                <?php if(is_page(534)): ?>
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
                <div class="c-btn01 c-btn01__center c-btn01__blue">
                    <a href="<?php echo home_url(); ?>">
                        <span>TOPページへ戻る</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
  </main>
<?php get_footer(); ?>