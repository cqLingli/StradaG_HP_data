<div class="p-about">
    <div class="l-container">
  <div class="c-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
        会社概要
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
      <h2>企業概要</h2>      
    </div>
    <div class="p-about_groupContent">
      <div class="company_left">
        <div class="t-company_list">
          <dl>
            <dt>法人名称</dt>
            <dd>株式会社タックス・リアルティ</dd>
          </dl>
          <dl>
            <dt>代表</dt>
            <dd>代表取締役　加藤 敦</dd>
          </dl>                                 
          <dl>
            <dt>登録番号</dt>
            <dd>東京都知事（1）第107399号</dd>
          </dl>
          <dl>
            <dt>本店所在地</dt>
            <dd>〒103-0014 東京都中央区日本橋蛎殻町2-11-2 オートエックス工藤ビル6階</dd>
          </dl>                      
          <dl>
            <dt>電話番号</dt>
            <dd>03-5962-3583（代）　　ファックス　03-5962-3584</dd>
          </dl>                     
          <dl>
            <dt>メールアドレス</dt>
            <dd>info@taxria.co.jp</dd>
          </dl>                      
          <dl>
            <dt>営業時間</dt>
            <dd>月曜日～金曜日　9時～18時　※土曜日・日曜日・祝日休み</dd>
          </dl> 
          <dl>
            <dt>業務内容</dt>
            <dd>・不動産コンサルティング<br />
            ・不動産売買<br />
            ・不動産売買仲介<br />
            ・不動産賃貸仲介<br />
            ・不動産管理<br />
            ・不動産査定</dd>
          </dl>                                         
        </div>
      </div>
      <div class="company_right">
        <div class="access google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7327941343083!2d139.7840313756561!3d35.68358087258646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188984dfabd449%3A0xacb096fd53135487!2z5qCq5byP5Lya56S-44K_44OD44Kv44K544O744Oq44Ki44Or44OG44Kj!5e0!3m2!1sja!2sjp!4v1714269935986!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="t-company_list">
          <dl>
            <dt>最寄駅 アクセス方法</dt>
            <dd>
              半蔵門線　　水天宮前　徒歩2分
              <a href="<?php echo home_url('taxria/taxriaaccess/#access01'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              日比谷線　　人形町駅　徒歩5分
              <a href="<?php echo home_url('taxria/taxriaaccess/#access02'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              浅草線　　　人形町駅　徒歩8分
              <a href="<?php echo home_url('taxria/taxriaaccess/#access02'); ?>">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              都営新宿線　浜町駅　　徒歩10分
              <a href="<?php echo home_url('taxria/taxriaaccess/#access03'); ?>" class="accessChange">
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
              'company' => 'TR', // 自定义字段名
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
    

