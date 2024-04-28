<div class="p-about">
    <div class="l-container">
  <div class="c-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
        法人概要
          <span>About</span>
        </h1>
      </div>
    </div>
  </div>
    </div>

    <div class="c-new-content">
    <div class="l-container">
    <div class="companyss">
  <div class="p-about_group" id="企業概要">
    <div class="c-tlt02 c-tlt02--center">                      
      <h2>法人概要</h2>      
    </div>
    <div class="p-about_groupContent">
      <div class="company_left">
        <div class="t-company_list">
          <dl>
            <dt>法人名</dt>
            <dd>ストラーダ社会保険労務士法人</dd>
          </dl>
          <dl>
            <dt>代表</dt>
            <dd>宿谷 裕樹</dd>
          </dl>                                 
          <dl>
            <dt>登録番号</dt>
            <dd>全国社会保険労務士連合会<br />
            第1318007号、第13170127号</dd>
          </dl>
          <dl>
            <dt>本店所在地</dt>
            <dd>〒103-0014 東京都中央区日本橋蛎殻町2-11-2 オートエックス工藤ビル3階</dd>
          </dl>                      
          <dl>
            <dt>電話番号</dt>
            <dd>03-6231-1103</dd>
          </dl>                     
          <dl>
            <dt>メールアドレス</dt>
            <dd>strada-contact@strada-sr.jp</dd>
          </dl>                      
          <dl>
            <dt>営業時間</dt>
            <dd>月曜日～金曜日　9時～18時　※土曜日・日曜日・祝日休み</dd>
          </dl> 
          <dl>
            <dt>業務内容</dt>
            <dd>・新規設立後の労務手続き<br />
                ・給与計算<br />
                ・社会保険・労働保険<br />
                ・就業規則作成<br />
                ・助成金コンサルティング<br />
                ・外国人労働者受入対応<br />
                ・人材派遣・有料職業紹介<br />
                ・顧問契約<br />
                ・人材採用コンサルティング</dd>
          </dl>                                         
        </div>
      </div>
      <div class="company_right">
        <div class="access google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.733163766779!2d139.78403417565616!3d35.68357177258647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188945bbfdda23%3A0xea532b72ba078541!2z44K544OI44Op44O844OA56S-5Lya5L-d6Zm65Yq05YuZ5aOr5rOV5Lq6!5e0!3m2!1sja!2sjp!4v1714271627451!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="t-company_list">
          <dl>
            <dt>最寄駅 アクセス方法</dt>
            <dd>
              半蔵門線　　水天宮前　徒歩2分
              <a href="<?php echo home_url('sr/sraccess/#access01'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              日比谷線　　人形町駅　徒歩5分
              <a href="<?php echo home_url('sr/sraccess/#access02'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              浅草線　　　人形町駅　徒歩8分
              <a href="<?php echo home_url('sr/sraccess/#access02'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              都営新宿線　浜町駅　　徒歩10分
              <a href="<?php echo home_url('sr/sraccess/#access03'); ?>" class="accessChange">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
    </div>
    </div>
    </div>
    <div class="l-container">
    <div class="aboutcomstyle">
  <div class="p-about_history" id="ストラーダグループの沿革">
    <div class="c-tlt02 c-tlt02--center">                      
      <h2>ストラーダグループの沿革</h2>      
    </div>
    <div class="p-about_historyContent">
      <div class="p-about_historyTime">                                
             <?php
            $args = array(
              'post_type' => 'evolution', // 文章类型
              'posts_per_page' => -1,
              'company' => 'SS', // 自定义字段名
            );
            $query = new WP_Query($args); // 执行查询
            ?>
            <?php
              if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>
                
                <dl>
                    <dt><?php echo get_the_title(); ?></dt>
                    <dd>
                        <?php echo the_content(); ?>
                    </dd>
                </dl>  
                
            <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
             <?php endif;?>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
    

