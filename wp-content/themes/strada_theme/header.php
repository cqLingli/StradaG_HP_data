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
    <div class="catch">ワンストップの集団だからこそできる部分最適ではなく全体最適な提案を。</div>
    <!-- <div class="h-btn">
      <span></span>
    </div> -->
    <div class="l-header__top">
      <div class="l-container_header">
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
              <a href="tel:0356436431" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                <span>
                  03-5643-6431
                  <small>平日：9時~18時</small>
                </span>
              </a>
            </div>
            <div class="h-mail h-mail--1">
              <a href="<?php echo home_url('#Contact'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
                <span>お問い合わせ</span>
              </a>
            </div>
            <!-- <div class="h-mail h-mail--2">
              <a href="https://timerex.net/s/strada.5kaigishitsu/9871b478" target="_blank">
                <img src="<?php /*echo get_template_directory_uri(); */?>/images/common_sz/ico-book.png" alt="" />
                <span>カレンダーから<br />無料相談を予約する</span>
              </a>
            </div>
            <div class="h-mail h-mail--3">
              <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
                <img src="<?php /*echo get_template_directory_uri();*/ ?>/images/common_sz/ico-line.svg" alt="" />
                <span>LINEでご相談</span>
              </a>
            </div> -->
            <div class="h-mail h-mail--5">
                <img class="search_icon" src="<?php echo get_template_directory_uri(); ?>/images/common/seach_icon.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--↓other hp Lincks-->
    <div class="l-header__top2">
      <div class="h-otherhp">
        <div class="h-menum h-menum-sb">
          <div class="vertical-line_otherhp">
            <p>
            <a href="<?php echo home_url('bs'); ?>">
                <span>ストラーダビジネスサポート</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-sz">
          <div class="vertical-line_otherhp">
            <p>
              <a href="<?php echo home_url('tax'); ?>">
                <span>ストラーダ税理士法人</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-sg">
          <div class="vertical-line_otherhp">
            <p>
              <a href="<?php echo home_url('admin'); ?>">
                <span>ストラーダ行政書士</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-ss">
          <div class="vertical-line_otherhp">
            <p>
              <a href="<?php echo home_url('sr'); ?>">
                <span>ストラーダ社会保険労務士</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-ch">
          <div class="vertical-line_otherhp">
            <p>
              <a href="<?php echo home_url('chushoukigyouroudou'); ?>">
                <span>中小企業労働企画開発協会</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-tr">
          <div class="vertical-line_none">
            <p>
               <a href="<?php echo home_url('taxria'); ?>">
                <span>タックス・リアルティ</span>
              </a>
            </p>
            </div>
          </div>
      </div>
    </div>
    <!--↑other hp Lincks-->
    <div class="l-header__nav">
      <div class="l-container">
        <ul class="h-nav">
          <li><a href="<?php echo home_url('news'); ?>">
              <div class="vertical-line_head">ニュース</div>
            </a></li>
          <li>
            <a href="<?php echo home_url('#'); ?>">
              <div class="vertical-line">業務内容</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#StradaGroup'); ?>">
              <div class="vertical-line">グループ紹介</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#About'); ?>">
              <div class="vertical-line">グループ概要</div>
            </a>
          </li>
          <!-- <li>
            <a href="<?php //echo home_url('#menber'); ?>">
              <div class="vertical-line">メンバー紹介</div>
            </a>
          </li> -->
          <li>
            <a href="<?php echo home_url('access'); ?>">
              <div class="vertical-line">アクセス</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#Recruit'); ?>">
              <div class="vertical-line">リクルート</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="l-header_topline"></div>
    </div>
    <div id="search_content_ID" class="search_content">
      <div class="search_content_a">
        <a href="<?php echo home_url('bs'); ?>"><div class="search_content_style_sb">ストラーダビジネスサポート</div></a>
        <a href="<?php echo home_url('tax'); ?>"><div class="search_content_style_sz">ストラーダ税理士法人</div></a>
        <a href="<?php echo home_url('admin'); ?>"><div class="search_content_style_sg">ストラーダ行政書士</div></a>
        <a href="<?php echo home_url('sr'); ?>"><div class="search_content_style_ss">ストラーダ社会保険労務士</div></a>
        <a href="<?php echo home_url('chushoukigyouroudou'); ?>"><div class="search_content_style_ch">中小企業労働企画開発協会</div></a>
        <a href="<?php echo home_url('taxria'); ?>"><div class="search_content_style_tr">タックス・リアルティ</div></a>

        <a href="<?php echo home_url('news'); ?>"><div class="search_content_style">ニュース</div></a>
        <a href="<?php echo home_url('#'); ?>"><div class="search_content_style">業務内容</div></a>
        <a href="<?php echo home_url('#StradaGroup'); ?>"><div class="search_content_style">グループ紹介</div></a>
        <a href="<?php echo home_url('#About'); ?>"><div class="search_content_style">グループ概要</div></a>
        <!-- <a href="<?php //echo home_url('members/representative/yamada'); ?>"><div class="search_content_style">メンバー紹介</div></a> -->
        <a href="<?php echo home_url('access'); ?>"><div class="search_content_style">アクセス</div></a>
        <a href="<?php echo home_url('#Recruit'); ?>"><div class="search_content_style">リクルート</div></a>
      </div>
    <form id="searchFrom" method="get" action="<?php echo esc_url(home_url('/')); ?>">
      <div class="search_content_style1">
            <div class="search_content_style1_1">
                <input type="text" name="s" id="search_content_input" placeholder=" 検索">
            </div>
            <div class="search_content_style1_2">
                <button onclick="$("searchFrom").submit();" class="search_content_button">
                <svg t="1691662394048" class="icon-search" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="31988" width="30" height="30"><path d="M726.460377 809.298113c-68.588679 51.441509-153.6 81.630189-245.856603 81.630189-226.777358 0-410.566038-183.788679-410.566038-410.566038s183.788679-410.566038 410.566038-410.566038 410.566038 183.788679 410.566037 410.566038c0 92.256604-30.430189 177.267925-81.630188 245.856604l127.516981 127.516981c22.701887 22.701887 22.943396 59.65283-0.24151 82.837736-22.943396 22.943396-60.377358 22.460377-82.837736 0.241509L726.460377 809.298113zM480.603774 773.796226c162.05283 0 293.192453-131.381132 293.192452-293.192452S642.415094 187.411321 480.603774 187.411321 187.411321 318.792453 187.411321 480.603774c0 162.05283 131.139623 293.192453 293.192453 293.192452z m0 0" p-id="31989" fill="#8a8a8a"></path></svg>
                </button>
            </div>
      </div>
    </form>
    </div>
    </div>
<?php set_query_var('headername', "top");; ?>
  </header>
  
  
  