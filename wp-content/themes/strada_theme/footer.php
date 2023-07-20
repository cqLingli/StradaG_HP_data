  <!-- .l-footer | フッター -->
   <footer class="l-footer">
    
  <div class="fx-contact">
    <div class="fx-contact_inner">
<!--       <a href="tel:0120709459" class="fx-contact_btn tel"> -->
			<a href="tel:0120709459" class="fx-contact_btn tel"　onclick="ga('send','event','tel','sp_tap','contact');">
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-line.png" alt="" />0120-709-459</p>
        <span>平日：9時~18時</span>
      </a>
		
<!--       <a href="<?php echo home_url('strada-otoiawase'); ?>" class="fx-contact_btn contact contact--1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
        <span>お問い合わせ</span>
      </a> -->
		
		<a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>" class="fx-contact_btn contact contact--1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
			<span>お問い合わせ</span>
		</a>
		
      <a href="https://line.me/R/ti/p/%40395gkqmy" class="fx-contact_btn line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-line.svg" alt="" />
        <span>LINEでご相談</span>
      </a>
      <a target="_blank" href="https://timerex.net/s/strada/384eeed5" class="fx-contact_btn contact contact--2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-book.png" alt="" />
          <span>無料相談を予約</span>
        </a>
    </div>
  </div>

  <div class="fx-contact-pc">
    <div class="fx-contact-pc_inner">
      <div class="tel">
        <div class="tel_box">無料相談予約</div>
        <dl class="tel_part">
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-line.png" alt="" /></dt>
          <dd>
<!--             <a href="tel:0120709459">0120-709-459</a> -->
			  <a href="tel:0120709459" onclick="ga('send','event','tel','sp_tap','contact');">0120-709-459</a>
            <p><span>平日：9時~18時</span></p> 
          </dd>
        </dl>
      </div>
      <div class="btn">
		  
<!--         <a href="<?php echo home_url('strada-otoiawase'); ?>" class="fx-contact_btn contact contact--1">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
          <span>お問い合わせ</span>
        </a> -->
		  
		  <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>" class="fx-contact_btn contact contact--1">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
			  <span>お問い合わせ</span>
		  </a>
		  
        <a href="https://line.me/R/ti/p/%40395gkqmy" class="fx-contact_btn line">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-line.svg" alt="" />
          <span>LINEでご相談</span>
        </a>
        <a target="_blank" href="https://timerex.net/s/strada/384eeed5" class="fx-contact_btn contact contact--2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-book.png" alt="" />
          <span>カレンダーから<br/>無料相談を予約する</span>
        </a>
      </div>
    </div>
  </div>
  
    <div class="l-footer__contact">
      <div class="l-container_small">
        <div class="f-flex f-flex_sb">
          <div class="f-phone">
            <p>電話でのお問い合わせはこちら</p>
            <p class="bg-red">無料相談予約</p>
<!--             <a href="tel:0120-709-459"> -->
				<a href="tel:0120709459" onclick="ga('send','event','tel','sp_tap','contact');">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-line.png" alt="" />
              <span>
                0120-709-459
                <small>平日：9時~18時</small>
              </span>
            </a>
          </div>
          <div class="f-contact">
            <div class="f-contact_mail f-contact_mail--1">
				
<!--               <a href="<?php echo home_url('strada-otoiawase'); ?>"> -->
				  
				  <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>">				  
				  
                <span>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
                  <small>
                    Webからの<br />
                    お問い合わせはこちら
                  </small>
                </span>
              </a>
            </div>
            <div class="f-contact_line">
              <a href="https://line.me/R/ti/p/%40395gkqmy">
                <span>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-line.svg" alt="" />
                  <small>
                    LINEで<br />
                    ご相談
                  </small>
                </span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/line-qr.png" alt="" />
              </a>
            </div>
            <div class="f-contact_mail f-contact_mail--2">
              <a href="https://timerex.net/s/strada/384eeed5" target="_blank">
                <span>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-book.png" alt="" />
                  <small>カレンダーから<br/>無料相談を予約する</small>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="l-footer__menu">
      <div class="l-container">
        <div class="f-nav">
          <div class="col f-nav_items">
            <h3>事業内容</h3>
            <ul>
				
				<?php 
				  $terms = get_terms( 'taxonomy_service', array(
					'hide_empty' => false,
					'parent' => 0,
					'order' => 'ASC',
					'orderby' => 'term_id'
				  ) );
				  foreach ( $terms as $term ) {
					$tax_link = get_term_link($term->slug, 'taxonomy_service');
					$tax_name = $term->name;
					$tax_slug = $term->slug;
					echo '<li><a href="'.get_term_link($term).'">'.$tax_name.'</a></li>';
				  }    
				?>
            </ul>
          </div>
          <div class="col f-nav_items">
            <h3>ストラーダについて</h3>
            <ul>
              <li><a href="<?php echo (is_page('about') ? '#philosophy' : home_url('about').'#philosophy') ?>">企業理念</a></li>
              <li><a href="<?php echo (is_page('about') ? '#message' : home_url('about').'#message') ?>">代表メッセージ</a></li>
              <li><a href="<?php echo (is_page('about') ? '#group' : home_url('about').'#group') ?>">グループ概要</a></li>
              <!-- <li><a href="<?php echo (is_page('about') ? '#history' : home_url('about').'#history') ?>">沿革</a></li> -->
              <li><a href="<?php echo (is_page('about') ? '#access' : home_url('about').'#access') ?>">アクセス</a></li>
            </ul>
          </div>
          <div class="col f-nav_items">
            <h3>よくある質問</h3>
            <ul>
              <li><a href="<?php echo (is_page('qa') ? '#無料相談について' : home_url('qa').'#無料相談について') ?>">無料相談について</a></li>
              <li><a href="<?php echo (is_page('qa') ? '#事務所について' : home_url('qa').'#事務所について') ?>">事務所について</a></li>
              <li><a href="<?php echo (is_page('qa') ? '#サービスについて' : home_url('qa').'#サービスについて') ?>">サービスについて</a></li>
              <li><a href="<?php echo (is_page('qa') ? '#その他について' : home_url('qa').'#その他について') ?>">その他について</a></li>
            </ul>
          </div>
           <div class="col f-nav_items">
            <h3>採用情報</h3>
            <ul>
              <li>
                <a href="<?php echo home_url('recruit').'#recruit1'; ?>">新卒</a>
              </li>
              <li>
                <a href="<?php echo home_url('recruit').'#recruit2'; ?>">中途</a>
              </li>
              <li>
                <a href="<?php echo home_url('recruit').'#recruit3'; ?>">
                  アルバイト・パート
                </a>
              </li>
            </ul>
          </div> 
          <div class="col f-nav_items01">
            <ul>
           <li>
                <a href="<?php echo home_url('voice'); ?>">お客様の声</a>
              </li> 
              <li>
                <a href="<?php echo home_url('members'); ?>">
                  メンバー紹介
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="l-footer__banner">
      <div class="l-container">
        <div class="f-banner cols-4">
          <a href="https://www.strada-sr.com/" class="f-banner_items" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_or.png" alt="" />
          </a>
          <a href="https://www.strada-admin.jp/" class="f-banner_items" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_gray.png" alt="" />
			</a>
          <a href="https://www.strada-bs.jp/" class="f-banner_items" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_green.png" alt="" />
          </a>
          <a class="f-banner_items" href="https://www.chushoukigyouroudou.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_or2.png" alt="" />
          </a>
        </div>
      </div>
    </div>
    <div class="l-footer__foot">
      <div class="l-container">
        <div class="f-logo">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_white.png" alt="" />
          </a>
        </div>
        <div class="f-address">
          <p>
            ストラーダ税理士法人 <br />
            東京都中央区日本橋蛎殻町2丁目11−2 オートエックス工藤ビル4F <br />
            TEL:0120-709-459
          </p>
        </div>
        <ul class="f-social">
          <li>
            <a href="https://twitter.com/stradatax" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-twitter.png" alt="" />
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/stradatax" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-facebook.png" alt="" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/strada.tax/?hl=ja" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-instagram.png" alt="" />
            </a>
          </li>
        </ul>
        <div class="f-copyright">
          <ul>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url('news'); ?>">ニュース</a></li>
            <li><a href="<?php echo home_url('columns'); ?>">お役立ち情報</a></li>
            <li><a href="<?php echo home_url('privacy-policy'); ?>">プライバシーポリシー</a></li>
            <!-- <li><a href="">プライバシーポリシー</a></li> -->
            <li><a href="<?php echo home_url('terms-of-use'); ?>">利用規約</a></li>
          </ul>
          <p>
          Copyright © strada-tax.jp All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- jQueryの読み込み -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <!-- スライダーのjsの読み込み -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>

  <?php wp_footer(); ?>

  <!-- 共通のjsの読み込み -->
  <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script> -->
</body>

</html>