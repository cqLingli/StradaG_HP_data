<div class="p-about">
    <div class="l-container">
  <div class="c-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
        ストラーダについて
          <span>ABOUT STRADA</span>
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
      <h2>企業概要</h2>      
    </div>
    <div class="p-about_groupContent">
      <div class="company_left">
        <div class="t-company_list">
          <dl>
            <dt>法人名称</dt>
            <dd>ストラーダ税理士法人</dd>
          </dl>
          <dl>
            <dt>代表</dt>
            <dd>代表取締役　山田 直輝</dd>
          </dl>                                 
          <dl>
            <dt>登録番号</dt>
            <dd>日本橋支部　登録番号3613</dd>
          </dl>
          <dl>
            <dt>本店所在地</dt>
            <dd>〒103-0014 東京都中央区日本橋蛎殻町2-11-2 オートエックス工藤ビル4階</dd>
          </dl>                      
          <dl>
            <dt>電話番号</dt>
            <dd>03-6206-215</dd>
            <dt>ファックス</dt>
            <dd>03-5643-6432</dd>
          </dl>                     
          <dl>
            <dt>メールアドレス</dt>
            <dd>info@strada-tax.jp</dd>
          </dl>                      
          <dl>
            <dt>営業時間</dt>
            <dd>月曜日～金曜日　9時～18時　※土曜日・日曜日・祝日休み</dd>
          </dl> 
          <dl>
            <dt>業務内容</dt>
            <dd>・税金に関する各種アドバイス<br />
                ・法人税の申告書の作成<br />
                ・確定申告書の作成<br />
                ・相続税の申告書の作成<br />
                ・贈与税の申告書の作成<br />
                ・財産基本通達に基づく財産評価</dd>
          </dl>                                         
        </div>
      </div>
      <div class="company_right">
        <div class="access google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7327941343087!2d139.78403137565613!3d35.68358087258645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188945bc006151%3A0x7e7e6ad10bc42703!2z44K544OI44Op44O844OA56iO55CG5aOr5rOV5Lq6!5e0!3m2!1sja!2sjp!4v1714271032941!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="t-company_list">
          <dl>
            <dt>最寄駅 アクセス方法</dt>
            <dd>
              半蔵門線　　水天宮前　徒歩2分
              <a href="<?php echo home_url('tax/taxaccess/#access01'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              日比谷線　　人形町駅　徒歩5分
              <a href="<?php echo home_url('tax/taxaccess/#access02'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              浅草線　　　人形町駅　徒歩8分
              <a href="<?php echo home_url('tax/taxaccess/#access02'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              都営新宿線　浜町駅　　徒歩10分
              <a href="<?php echo home_url('tax/taxaccess/#access03'); ?>" class="accessChange">
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
              'company' => 'SZ', // 自定义字段名
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
    

