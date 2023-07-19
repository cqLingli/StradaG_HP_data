<?php
/* Template Name: Service Sub Page */
get_header();
?>
  <!-- .l-main | メインコンテンツ -->
  <main class="l-main p-service">
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
            事業内容
            <span>Service</span>
          </h1>
        </div>
      </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="l-container">
      <div class="p-service__detail t-block">
        <div class="c-tlt01 c-tlt01__black">
          <h2>
            記帳業務の特徴
          </h2>
        </div>
        <p class="c-txt--center">
          <br><br>
          ストラーダの記帳代行では、お客様から必要資料を全て頂いてから、<br>
          約1か月で合計残高試算表（決算書の簡易版）を作成します。
        </p>
        <div class="p-service__detail--image">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/img01.jpg" alt="決算書作成のための資料">
          </figure>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/img02.jpg" alt="試算表完成">
          </figure>
        </div>
        <div class="p-service__detail--content">
          <h3>オプションにより更に充実したサービス</h3>
          <div class="p-service__detail--items">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/img03.jpg" alt="最新のクラウド会計も対応可能">
            <div class="p-service__detail--i">
              <h4>最新のクラウド会計も対応可能</h4>
              <p>クラウド会計を導入することにより、お金の流れがよりタイムリーに見ることができ、資料のやり取りも削減して、数字の見える化、経理業務の削減につながります。</p>
            </div>
          </div>
          <div class="p-service__detail--items">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/img04.jpg" alt="もっと早く3週間で残高試算表を完成">
            <div class="p-service__detail--i">
              <h4>もっと早く3週間で残高試算表を完成</h4>
              <p>銀行との取引を行う会社では、銀行との信頼構築のため、毎月試算表の提出が必要になることがあります。<br>その場合には、1か月では遅い場合があります。そんな時、3週間で特急で合計残高試算表を作成します。</p>
            </div>
          </div>
          <div class="p-service__detail--items">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/img05.jpg" alt="部門別計算による各部の採算性をチェック">
            <div class="p-service__detail--i">
              <h4>部門別計算による各部の採算性をチェック</h4>
              <p>複数部署を営んでいる場合に、通常の合計残高試算表の作成では、各部署の採算を把握することができません。<br>そのため、部門別計算を導入することにより、各部の採算性を可視化することができます。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>