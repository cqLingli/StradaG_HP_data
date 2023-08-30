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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_sg.css" />

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
  <header>
  <div class="l-header" id="header">
    <div class="catch">グローバル時代にも活躍できる企業を作る!！</div>
    <!-- <div class="h-btn">
      <span></span>
    </div> -->
    <div class="l-header__top">
    <div class="l-container_header">
        <div class="l-header__main">
          <div class="h-logo">
            <h1>
              <a href="<?php echo home_url('admin'); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sg/logo.png" alt="" />
              </a>
            </h1>
          </div>
          <div class="h-info">
            <div class="h-phone">
              <p>無料相談予約</p>
              <a href="tel:0358436552" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                <span>
                  03-5843-6552
                  <small>平日：9時~18時</small>
                </span>
              </a>
            </div>
            <div class="h-mail h-mail--1">
              <a href="<?php echo home_url('admin/#Contact'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sg/ico-mail.svg" alt="" />
                <span>お問い合わせ</span>
              </a>
            </div>
<!--
            <div class="h-mail h-mail--2">
              <a href="https://timerex.net/s/strada.5kaigishitsu/9871b478" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sg/ico-book.png" alt="" />
                <span>カレンダーから<br />無料相談を予約する</span>
              </a>
            </div>
            <div class="h-mail h-mail--3">
              <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sg/ico-line.svg" alt="" />
                <span>LINEでご相談</span>
              </a>
            </div>
  -->
            <div class="h-mail h-mail--4">
            <a href="<?php echo home_url(); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_sg/minilogo.png" alt="" />
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
          <li><a href="<?php echo home_url('admin/adminnewslist');  ?>"><div class="vertical-line_head">ニュース</div></a></li>
          <li>
            <a href="<?php echo home_url('admin/adminservicelist'); ?>"><div class="vertical-line">サービス案内</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('admin'); ?>"><div class="vertical-line">よくあるご質問</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('admin/#About'); ?>"><div class="vertical-line">事務所概要</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('admin/adminmenber'); ?>"><div class="vertical-line">メンバー紹介</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('admin/#Price'); ?>"><div class="vertical-line">料金表</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('admin/adminaccess'); ?>"><div class="vertical-line">アクセス</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('admin/#Recruit'); ?>"><div class="vertical-line">リクルート</div></a>
          </li>
        </ul>
      </div>
      <div class="l-header_topline"></div>
    </div>
    <div id="search_content_ID" class="search_content">
      <div class="search_content_a">
      <a href="<?php echo home_url('admin/adminnewslist'); ?>"><div class="search_content_style">ニュース</div></a>
      <a href="<?php echo home_url('admin/adminservicelist'); ?>"><div class="search_content_style">業務内容</div></a>
      <a href="<?php echo home_url('admin'); ?>"><div class="search_content_style">よくあるご質問</div></a>
      <a href="<?php echo home_url('admin/#About'); ?>"><div class="search_content_style">事務所概要</div></a>
      <a href="<?php echo home_url('admin/adminmenber'); ?>"><div class="search_content_style">メンバー紹介</div></a>
      <a href="<?php echo home_url('admin/#Price'); ?>"><div class="search_content_style">料金表</div></a>
      <a href="<?php echo home_url('admin/adminaccess'); ?>"><div class="search_content_style">アクセス</div></a>
      <a href="<?php echo home_url('admin/#Recruit'); ?>"><div class="search_content_style">リクルート</div></a>
      </div>
      <div class="search_content_style1">
      <div class="search_content_style1_1">
                <input type="text" id="search_content_input" placeholder="検索">
            </div>
            <div class="search_content_style1_2">
                <button onclick="#" class="search_content_button">
                <svg t="1691662394048" class="icon-search" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="31988" width="30" height="30"><path d="M726.460377 809.298113c-68.588679 51.441509-153.6 81.630189-245.856603 81.630189-226.777358 0-410.566038-183.788679-410.566038-410.566038s183.788679-410.566038 410.566038-410.566038 410.566038 183.788679 410.566037 410.566038c0 92.256604-30.430189 177.267925-81.630188 245.856604l127.516981 127.516981c22.701887 22.701887 22.943396 59.65283-0.24151 82.837736-22.943396 22.943396-60.377358 22.460377-82.837736 0.241509L726.460377 809.298113zM480.603774 773.796226c162.05283 0 293.192453-131.381132 293.192452-293.192452S642.415094 187.411321 480.603774 187.411321 187.411321 318.792453 187.411321 480.603774c0 162.05283 131.139623 293.192453 293.192453 293.192452z m0 0" p-id="31989" fill="#8a8a8a"></path></svg>
                </button>
            </div>
      </div>
    </div>
  </div>
  </header>