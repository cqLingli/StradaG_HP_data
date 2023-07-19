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
  </head>

  <!-- .l-body | サイト全体 -->

  <body class="l-body">
    <!-- .l-header | ヘッダー -->
    <header class="l-header">
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
                <p>無料電話相談</p>
                <div class="time">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-line.png" alt="" />
                  <span>
                    0120-709-459
                    <small>平日：9時~20時 土曜：9時~17時</small>
                  </span>
                </div>
              </div>
              <div class="h-mail">
                <a href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
                  <span>
                    今すぐ無料で相談する
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-header__nav">
        <div class="l-container">
          <ul class="h-nav">
            <li class="<?php if(is_page(array(34, 65))) { echo "is-active"; } ?> has-sub">
              <?php if(wp_is_mobile()) { ?>
                <span>事業内容</span>
              <?php } else { ?>
                <a href="<?php echo get_permalink(34); ?>">事業内容</a>
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
            </li>
            <li>
              <a href="">お客様の声</a>
            </li>
            <li class="<?php if(is_page(32)) { echo "is-active"; } ?>">
              <a href="<?php echo get_permalink(32); ?>">ストラーダについて</a>
            </li>
            <li>
              <a href="">メンバー紹介</a>
            </li>
            <li>
              <a href="">よくあるご質問</a>
            </li>
            <li>
              <a href="">採用情報</a>
            </li>
            <li>
              <a href="">ニュース</a>
            </li>
            <li>
              <a href="">お役立ち情報</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

