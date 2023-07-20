<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- 対策系 -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <!-- ファビコンの読み込み -->
    <link rel="icon" href="<?php echo home_url(); ?>/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo home_url(); ?>/apple-touch-icon-152x152.png" />

    <!-- プラグインのcssの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.min.css" />

    <!-- 書き出したcssの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sz_style.css" />

    <?php wp_head(); ?>
	  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85290322-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <!-- .l-body | サイト全体 -->

  <body <?php body_class('l-body'); ?>>
    <!-- .l-header | ヘッダー -->
    <header class="l-header">
    <div class="catch">企業税務・資金調達に強い士業集団が豊富な実績で安心のスピード対応！new</div>
      <div class="h-btn">
        <span></span>
      </div>
      <div class="l-header__top">
        <div class="l-container">
          <div class="l-header__main">
            <div class="h-logo">
              <h1>
                <a href="<?php echo home_url(); ?>/">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="" />
                </a>
              </h1>
            </div>
            <div class="h-info">
              <div class="h-phone">
                <p>無料相談予約</p>
                <a href="tel:0120709459" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-line.png" alt="" />
                      <span>
                        0120-709-459
                        <small>平日：9時~18時</small>
                      </span>
                </a>
              </div>
              <div class="h-mail h-mail--1">
                <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
                  <span>お問い合わせ</span>
                </a>				  
              </div>  
              <div class="h-mail h-mail--2">
                <a href="https://timerex.net/s/strada.5kaigishitsu/9871b478" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-book.png" alt="" />
                  <span>カレンダーから<br/>無料相談を予約する</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-header__nav">
        <div class="l-container">
          <ul class="h-nav">
            <!-- <li class="<?php if(is_page(array(34, 65))) { echo "is-active"; } ?> has-sub">
              <?php if(wp_is_mobile()) { ?>
                <span>事業内容</span>
              <?php } else { ?>
                <a href="<?php echo get_post_type_archive_link('service'); ?>">事業内容</a>
              <?php } ?>
              <div class="h-nav__sub">
                <div class="h-nav__sub--inner">
                  <ul>
                    <li>
                      <a href="<?php echo get_permalink(65); ?>">法人設立支援</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(65); ?>">記帳代行・税務顧問</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(65); ?>">国際税務</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(65); ?>">相続税申告</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(65); ?>">確定申告・Airbnb確定申告</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li> -->            
            <li class="<?php if(is_page(32)) { echo "is-active"; } ?>">
              <a href="<?php echo get_permalink(32); ?>">ストラーダについて</a>
            </li>
			      <li><a href="<?php echo get_post_type_archive_link('service'); ?>">事業内容</a></li>
            <li>
              <a href="<?php echo get_post_type_archive_link('members'); ?>">メンバー紹介</a>
            </li>
            <li>
              <a href="<?php echo home_url('voice'); ?>">お客様の声</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(134); ?>">よくあるご質問</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(42); ?>">採用情報</a>
            </li> 
            <li>
              <a href="<?php echo get_post_type_archive_link('news'); ?>">ニュース</a>
            </li>
            <li>
              <a href="<?php echo home_url('columns'); ?>">お役立ち情報</a>
            </li>
			  <li>
              <a href="<?php echo home_url('access'); ?>">アクセス</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

