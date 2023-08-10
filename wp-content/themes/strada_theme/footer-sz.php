  <!-- .l-footer | フッター -->
  <footer class="l-footer">    
    <div class="l-footer__foot">
    <div class="l-footer_info">
            <div class="l-footer_phone">
              <p>無料相談予約</p>
              <a href="tel:0120709459" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/icon-line.png" alt="" />
                <span>
                  0120-709-459
                  <small>平日：9時~18時</small>
                </span>
              </a>
            </div>
            <!--
            <div class="l-footer_mail l-footer_mail--1">
              <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/ico-mail.svg" alt="" />
                <span>お問い合わせ</span>
              </a>
            </div>
            -->
            <div class="l-footer_mail l-footer_mail--2">
              <a href="https://timerex.net/s/strada.5kaigishitsu/9871b478" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/ico-book.png" alt="" />
                <span>カレンダーから<br />無料相談を予約する</span>
              </a>
            </div>
            <div class="l-footer_mail l-footer_mail--3">
              <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/ico-line.svg" alt="" />
                <span>LINEでご相談</span>
              </a>
            </div>
      </div>
      <div class="l-container">
        <ul class="f-social">
          <li>
            <a href="https://www.facebook.com/stradatax" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/facebook_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/line_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="" class="fx-contact_btn youtube" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/youtube_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/strada.tax/?hl=ja" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/ins_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="https://twitter.com/stradatax" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/twitter_icon.png" alt="" />
            </a>
          </li>
        </ul>
        <ul>
            <li><a href="<?php echo home_url('url1'); ?>">個人情報の保護に関するステートメント</a></li>
            <li><a href="<?php echo home_url('url2'); ?>">ソーシャルメディアポリシー</a></li>
        </ul>
      </div>
      <div class="f-copyright">
        <p>
        Copyright © Strada Tax Accountant Corp. All rights reserved.
        </p>
      </div>
    </div>
  </footer>


  <!-- jQueryの読み込み -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <!-- スライダーのjsの読み込み -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>

  <!-- custom.jsの読み込み -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

  <?php wp_footer(); ?>

  <!-- 共通のjsの読み込み -->
  <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script> -->
</body>

</html>