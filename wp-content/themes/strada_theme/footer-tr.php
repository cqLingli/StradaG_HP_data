  <!-- .l-footer | フッター -->
  <footer class="l-footer">    
    <div class="l-footer__foot">
      <div class="l-container">
        <ul class="f-social">
          <li>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/facebook_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="https://lin.ee/BTXd44r" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/line_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="#" class="fx-contact_btn youtube" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/youtube_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/ins_icon.png" alt="" />
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/twitter_icon.png" alt="" />
            </a>
          </li>
        </ul>
        <ul>
            <li><a href="<?php echo home_url('/taxria/privacy-statement'); ?>">個人情報の保護に関するステートメント</a></li>
            <li><a href="<?php echo home_url('/social-media-policy'); ?>">ソーシャルメディアポリシー</a></li>
        </ul>
      </div>
      <div class="f-copyright">
        <p>
        Copyright © TAX REALTY Inc. All rights reserved.
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