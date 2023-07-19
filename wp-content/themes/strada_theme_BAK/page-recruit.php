<?php
/* Template Name: Recruit Page */
get_header();
?>
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle">
    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/mv.jpg" alt="採用情報" />
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
          採用情報
          <span>RECRUIT</span>
        </h1>
      </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
  <div class="p-recruit">
    <div class="l-container">
      <div class="p-recruitBlock t-block">
        <div class="p-recruitHead">
          <a href="#" class="is-active">新卒採用</a>
          <a href="#">中途採用</a>
          <a href="#">アルバイト・パート</a>
        </div>
        <div class="p-recruitContent">
          <h3>募集要項</h3>
          <div class="p-recruitContent__list">
            <dl>
              <dt>業務内容</dt>
              <dd>決算書の作成、法人税・消費税等の各種申告業務</dd>
            </dl>
            <dl>
              <dt>勤務形態</dt>
              <dd>正社員</dd>
            </dl>
            <dl>
              <dt>勤務地</dt>
              <dd>
                〒103-0014<br>東京都中央区日本橋蛎殻町2-11-2　オートエックス工藤ビル4階
              </dd>
            </dl>
            <dl>
              <dt>勤務時間</dt>
              <dd>
                9:00~17:00<br>
                有給休暇あり<br>
                税理士試験前休暇あり<br>
                夏季・冬季休暇あり
              </dd>
            </dl>
            <dl>
              <dt>給与</dt>
              <dd>
                (1)税理士<br>
                年俸400万円～<br>
                (2)税理士受験生(2科目以上合格)<br>
                年俸300万円～<br>
                (試用期間6か月)
              </dd>
            </dl>
            <dl>
              <dt>応募方法</dt>
              <dd>履歴書（写真貼付）、職務経歴書をご郵送またはメールで受け付けております。<br>書類選考の上、面接日をご連絡致します。</dd>
            </dl>
            <dl>
              <dt>その他</dt>
              <dd>年齢が若く、これから成長していく税理士法人です。将来は、中央区の公認会計士税理士事務所「ストラーダ税理士法人」の社員となって頂き、経営に参画していただけるような方をお待ちしています。ご応募お待ちしております。
              </dd>
            </dl>
          </div>
          <div class="p-recruitBtn">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="47.278" height="46.829" viewBox="0 0 47.278 46.829">
                <path id="Path_8595" data-name="Path 8595" d="M42.8,2a2.342,2.342,0,0,1,2.341,2.341v8.8l-4.683,4.683V6.683H7.683V44.146h32.78V37.688l4.683-4.683V46.487A2.342,2.342,0,0,1,42.8,48.829H5.341A2.342,2.342,0,0,1,3,46.487V4.341A2.342,2.342,0,0,1,5.341,2Zm4.163,15.941,3.311,3.311L32.067,39.463l-3.315,0,0-3.306ZM26.414,25.414V30.1H14.707V25.414Zm7.024-9.366v4.683H14.707V16.049Z" transform="translate(-3 -2)"/>
              </svg>
              採用エントリーはこちらから                  
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</main>
<?php get_footer(); ?>