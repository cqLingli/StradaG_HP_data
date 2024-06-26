<div class="p-about">
    <div class="l-container">
  <div class="c-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
        グループ概要
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
      <h2>グループ概要</h2>      
    </div>
    <div class="p-about_groupContent">
      <div class="company_left">
        <div class="t-company_list">
          <dl>
            <dt>グループ名称</dt>
            <dd>ストラーダグループ</dd>
          </dl>
          <dl>
            <dt>代表者</dt>
            <dd>グループ代表　山田直輝</dd>
          </dl>
          <dl>
            <dt>構成員数</dt>
            <dd>38名（他業務委託27名）</dd>
          </dl>                                 
          <dl>
            <dt>住所</dt>
            <dd>〒103-0014 東京都中央区日本橋蛎殻町1-36-5  5階
              <br>〒103-0014 東京都中央区日本橋蛎殻町2-11-2 3階・4階・5階・6階
            </dd>
          </dl>                                           
          <dl>
            <dt>グループ一覧</dt>
            <dd>
              <a href="<?php echo home_url('tax'); ?>" style="text-decoration: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/group/group_01.svg" /></a><br />
              <a href="<?php echo home_url('bs'); ?>" style="text-decoration: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/group/group_02.svg" /></a><br />
              <img src="<?php echo get_template_directory_uri(); ?>/images/group/group_03.svg" /><br />
              <a href="<?php echo home_url('sr'); ?>" style="text-decoration: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/group/group_08.svg" /></a><br />
              <a href="<?php echo home_url('chushoukigyouroudou'); ?>" style="text-decoration: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/group/group_04.svg" /></a><br />
              <a href="<?php echo home_url('admin'); ?>" style="text-decoration: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/group/group_05.svg" /></a><br />
              <a href="<?php echo home_url('taxria'); ?>" style="text-decoration: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/group/group_06.svg" class="specialImg"/></a><br />
              <img src="<?php echo get_template_directory_uri(); ?>/images/group/group_07.svg" /><br />
            </dd>
          </dl>                                         
        </div>
      </div>
      <div class="company_right">
        <div class="access google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.732793825305!2d139.78441761525877!3d35.68358088019382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188945bc013343%3A0x91fe51cc7df02e4d!2z5pel5pys44CB44CSMTAzLTAwMTQg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL6JuO5q6755S677yS5LiB55uu77yR77yR4oiS77ySIOOCquODvOODiOOCqOODg-OCr-OCueW3peiXpOODk-ODqyA0Zg!5e0!3m2!1sja!2s!4v1635329371742!5m2!1sja!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="t-company_list">
          <dl>
            <dt>最寄駅 アクセス方法</dt>
            <dd>
              半蔵門線　　水天宮前　徒歩2分
              <a href="access/#access01">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              日比谷線　　人形町駅　徒歩5分
              <a href="access/#access02">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              浅草線　　　人形町駅　徒歩8分
              <a href="access/#access02">
                経路はこちら
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/migi_icon.png" alt="" width="5%"/>
              </a>
              <br />
              都営新宿線　浜町駅　　徒歩10分
              <a href="access/#access03" class="accessChange">
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
              'company' => '', // 自定义字段名
            );
            $query = new WP_Query($args); // 执行查询
            $wk_title = '';
            ?>
      
            <?php
              if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>

                <dl>
                    <dt class="about-dt1"><?php echo get_the_title(); ?></dt>
                    <dd class="about-dd1">
                      <?php
                        $this_terms = get_the_terms(get_the_id(),'company');
                        foreach ($this_terms as $each_term){
                            // ターム名を出力
                            echo "<span class='news-company-".$each_term -> slug."'>".$each_term -> name.'　'."</span>";
                      }?>
                    </dd>
                    <dd class="about-dd2">
                        <?php echo the_content(); ?>
                    </dd>
                </dl>  
                
                
            <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
             <?php endif;?>
      
      <!--
      1111111111111
        <dl>
          <dt>2021年00月</dt>
          <dd style="width:30%">2021年00月</dd>
          <dd style="width:70%">
            <span>タックスリアルティ株式会社を設立</span><br />
            タックスリアルティ株式会社の代表取締役に加藤敦が就任致しました。
          </dd>

        </dl>                     
        <dl>
          <dt>2021年4月</dt>
          <dd><span>ストラーダビジネスサポート株式会社は、有料職業紹介事業許可を取得</span>
              <hr>
              <span>ストラーダ行政書士法人を設立</span><br />
                  ストラーダ行政書士法人の代表社員に星野隆介が就任致しました。</dd>
        </dl>                     
        <dl>
          <dt>2019年10月</dt>
          <dd>ストラーダビジネスサポート株式会社の取締役を吉永誠が辞任致しました。</dd>
        </dl>                     
        <dl>
          <dt>2018年11月</dt>
          <dd><span>塚田拓也が社員として就任</span><br />
              ストラーダ税理士法人の社員に公認会計士税理士の塚田拓也が就任致しました。
          </dd>
        </dl>                     
        <dl>
          <dt>2018年4月</dt>
          <dd><span>労働保険事務組合 中小企業労働企画開発協会を設立</span><br />
              労働保険事務組合 中小企業労働企画開発協会の会長に宿谷裕樹が就任致しました。</dd>
        </dl> 
        <dl>
          <dt>2018年1月</dt>
          <dd>ストラーダビジネスサポート株式会社の取締役に塚田拓也と宿谷裕樹が就任致しました。</dd>
        </dl>
        <dl>
          <dt>2017年11月</dt>
          <dd><span>ストラーダ社会保険労務士法人として法人化</span><br />
              ストラーダ社会保険労務士法人の代表社員に宿谷裕樹が就任致しました。</dd>
        </dl>
        <dl>
          <dt>2017年3月</dt>
          <dd><span>ストラーダ社会保険労務士事務所を設立</span></dd>
        </dl>
        <dl>
          <dt>2016年7月</dt>
          <dd>ストラーダビジネスサポート株式会社の代表取締役に山田直輝が、取締役に吉永誠が就任致しました。</dd>
        </dl>
        <dl>
          <dt>2016年6月</dt>
          <dd>
            <span>ストラーダビジネスサポート株式会社を設立</span>
            <hr>
            <span>ストラーダ税理士法人は、経済産業省より経営革新認定支援機関として認定</span><br />
              ストラーダ税理士法人は、中小企業の新たな事業活動の促進に関する法律に基づき、２０１６０６０３関東第４２号及び関財金１第46号により、平成28年6月17日に経済産
              業大臣より、経営革新認定支援機関として認定されました。</dd>
        </dl>                   
        <dl>
          <dt>2015年12月</dt>
          <dd><span>山田直輝税理士事務所を法人化してストラーダ税理士法人を設立</span><br />
          2015年12月23日に、山田直輝税理士事務所と佐藤廣子税理士事務所を統合して、法人化に伴い、東京都中央区日本橋でストラーダ税理士法人を設立致しました。</dd>
        </dl>
        -->
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
    

