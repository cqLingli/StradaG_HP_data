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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_sb.css" />

  <?php wp_head(); ?>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-85290322-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<!-- .l-body | サイト全体 -->

<body <?php body_class('l-body'); ?>>
  <!-- .l-header | ヘッダー -->
  <header class="l-header">
    <div class="catch">ビジネスの土台作りから拡大・上場まで一括支援！</div>
    <!-- <div class="h-btn">
      <span></span>
    </div> -->
    <div class="l-header__top">
    <div class="l-container_header">
        <div class="l-header__main">
          <div class="h-logo">
            <h1>
              <a href="<?php echo home_url(); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sb/logo.png" alt="" />
              </a>
            </h1>
          </div>
          <div class="h-info">
            <div class="h-phone">
              <p>無料相談予約</p>
              <a href="tel:03-6206-2159" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                <span>
                  03-6206-2159
                  <small>平日：9時~18時</small>
                </span>
              </a>
            </div>
            <div class="h-mail h-mail--1">
              <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sb//ico-mail.svg" alt="" />
                <span>お問い合わせ</span>
              </a>
            </div>
<!--
            <div class="h-mail h-mail--2">
              <a href="https://timerex.net/s/strada.5kaigishitsu/9871b478" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sb//ico-book.png" alt="" />
                <span>カレンダーから<br />無料相談を予約する</span>
              </a>
            </div>
            <div class="h-mail h-mail--3">
              <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sb//ico-line.svg" alt="" />
                <span>LINEでご相談</span>
              </a>
            </div>
  -->
            <div class="h-mail h-mail--4">
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sb//minilogo.png" alt="" />
              </a>
            </div>
            <div class="h-mail h-mail--5">
              <div class="h-mail h-mail--5">
                  <img class="search_icon" src="<?php echo get_template_directory_uri(); ?>/images/common/seach_icon.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="l-header__nav">
      <div class="l-container">
        <ul class="h-nav">
          <li><a href="<?php echo home_url('bs/bsnewslist'); ?>"><div class="vertical-line">ニュース</div></a></li>
          <li>
            <a href="<?php echo home_url('bs/bsservicelist');  ?>"><div class="vertical-line">業務内容</div></a>
          </li>
            <li>
                <a href="<?php echo home_url('bs/bscasestudylist');  ?>"><div class="vertical-line">事例</div></a>
            </li>
          <li>
            <a href="<?php echo home_url('bs'); ?>"><div class="vertical-line">よくあるご質問</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('bs'); ?>"><div class="vertical-line">事務所概要</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('bs/bsmenber'); ?>"><div class="vertical-line">メンバー紹介</div></a>
          </li>

          <li>
            <a href="<?php echo home_url('bs/bsaccess'); ?>"><div class="vertical-line">アクセス</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('bs'); ?>"><div class="vertical-line">リクルート</div></a>
          </li>            
        </ul>
      </div>
      <div class="l-header_topline"></div>      
    </div>
  </header>