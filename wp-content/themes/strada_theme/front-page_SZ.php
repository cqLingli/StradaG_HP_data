<?php get_header("sz");
/* Template Name: Front Page SZ */
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-top">
  <!-- start imageplay -->
  <div class="imageplay">
    <!-- picture area -->
    <ul>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Slider_img01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Slider_img02.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Slider_img03.png"
            alt="" /></a>
      </li>
    </ul>
    <!-- left,right arrow -->
    <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/arrow-left.png" alt=""
        class="arrowstyle-left" /></div>
    <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/arrow-right.png" alt=""
        class="arrowstyle-right" /></div>
    <!-- dot -->
    <ol>
    </ol>
  </div>
  <!-- end imageplay -->
  <!-- start What’s New -->
  <div class="block_wrap">
    <div class="border-text"></div>
    <div class="l-container">
    <div id="block_wrap" class="title_item_wrap active">
      <p class="chapter_title">What's New
      <div class="circle"></div>
      </p>
    </div>
    </div>
    <div class="border-bt"></div>
    <div class="l-container">
    <div id="list_wrap" class="node_wrap node_wrap_show">
      <div class="news_style1"><iframe src="https://www.youtube.com/embed/xGmXxpIj6vs" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
          style="width:100%;height:90%"></iframe>
        <p style="padding:0;margin:0;border:0">Youtubeストラーダグループチャンネル</p>
      </div>
      <div class="news_style2">
          <div class="t-news_list_topbox">
            <!-- <a href="<?php echo home_url('tax/taxnewslist'); ?>" style="text-decoration:none"> -->
              <div style="display: flex;overflow-x: hidden;width:100%">
                <div style="width:80%;color:#003E75;font-weight:bold;font-size:15px;">ニュース</div>
                <div style="width:100px;color:black">READ MORE</div>
                <div style="position:relative;top:-5px">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/news_more.png" alt="" style="width:30px" />
                </div>
              </div>
            <!-- </a> -->
            <hr style="border:1px dotted #BDB7B7;">
            <?php
            // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
              'post_type' => 'news', // 文章类型
              'posts_per_page' => 10,
              'paged' => $paged,
              'company' => 'SZ', // 自定义字段名
            );
            $query = new WP_Query($args); // 执行查询
            ?>
            <ul>
            <?php 
              if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>
              <li>
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <div class="time" style="float: left; width: 15%;font-size: 1.5rem;">
                    <?php echo get_the_date('Y.m.d') ?>
                  </div>
                  <div class="time" style="float: right; width: 85%; padding-left: 5px;font-size: 1.5rem;">
                    <?php echo get_the_title(); ?>
                  </div>
                </a>
              </li>
              <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
            <div class="title">
              <li>
                <p>
                  <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
              </li>
            </div>
            <?php endif;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end What’s New -->

  <!-- start Message -->
  <div class="block_wrap1">
    <div class="border-text1"></div>
    <div class="l-container">
    <div id="block_wrap1" class="title_item_wrap1 active1">
      <p class="chapter_title1">Message
      <div class="circle1"></div>
      </p>
    </div>
    </div>
    <div class="border-bt1"></div>
    <div class="l-container">
    <div id="list_wrap1" class="node_wrap1 node_wrap_show1">
      <div class="Message_style1">
        <hr style="border:1px dotted #BDB7B7;">
        <p class="Message_style1_p1">ストラーダ税理士法人の経営理念</p>
        <p class="Message_style1_p2">お客様と共に同じ道を歩く</p>
        <p class="Message_style1_p3">　「ストラーダ」とは、イタリア語で「道」という意味があります。お客様と歩む長い道をともに歩
          み続けられるような、税理士法人にしたいという意味を込めて、「ストラーダ税理士法人」と名付
          けました。税理士の特徴は、一時的なサービスではなく、企業が誕生し、企業が発展し続けるた
          めに、共に企業を成長させていく、生涯付き合える、パートナーとしての性質を有しています。企
          業の成長が、日本社会に価値を与え、弊法人のクライアントが少しでも日本社会に価値を与え
          る手助けすることが、私達の使命です。そのため、長期に渡って企業の価値を提供できるよう
          に、自己研鑽に励み、税務的面はもちろん、他の面においても価値を提供できるように努めてま
          いります。また、企業に価値を提供するスタッフが長期に渡って働けるような、社内環境を整え、
          新しいことに挑戦し続ける事務所経営を行います。</p>
        <p class="Message_style1_p4">ストラーダ税理士法人　代表社員</p>
        <p class="Message_style1_p5">山田 直輝</p>
        <hr style="border:1px dotted #BDB7B7;">
      </div>
      <div class="Message_style2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage.png" alt=""/>
      </div>
      <!-- start 選ばれる6つの理由 -->
  <div class="sixreasons_bg">
    <div class="title_bg">
      <div>
        <span class="title_wd">選ばれる6つの理由</span>
      </div>
    </div>
    <div class="reasonline1">
      <div class="reason01_style1">
        <div class="reason01_style1_borderin1">
          <p><span class="reason01_style1_span1">01</span><span class="reason01_style1_span2">上場企業含む300社以上の顧問実績</span>
          </p>
          <hr style="border:1px dotted #BDB7B7;">
          <p class="reason01_style1_p1">これまで担当してきた確かな実績で、あらゆるお客様のお悩みにお応え致します。また、上
            場企業含む300社以上、個人事業主150名以上の顧問実績から培われた金融機関の人脈
            を駆使して、クライアント様に適切な銀行をご紹介しております。
            <br />※一部紹介ができない地域がありますので、ご留意ください。
          </p>
          <div class="reason01_style1_img1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage_6つの理由img01.jpg" alt=""
              class="reason01_style1_img1_1" />
          </div>
        </div>
      </div>
      <div class="reason02_style1">
        <div class="reason02_style1_borderin1">
          <p><span class="reason02_style1_span1">02</span><span class="reason02_style1_span2">創業融資通過率99.7%の実績</span></p>
          <hr style="border:1px dotted #BDB7B7;">
          <p class="reason02_style1_p1">ストラーダでは創業融資を通過率を上げるためにご依頼者の状況確認から最適な金融機
            関をご提案させて頂きます。取引銀行の数や業種、業績など企業ごとに相性の良い金融機
            関をご紹介します。申込書や事業計画書などのサポートも細かく行い、99.7％の融資通過
            率になりました。</p>
          <div class="reason02_style1_img1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage_6つの理由img02.jpg" alt=""
              class="reason02_style1_img1_1" />
          </div>
        </div>
      </div>
    </div>
    <div class="reasonline2">
      <div class="reason03_style1">
        <div class="reason03_style1_borderin1">
          <p><span class="reason03_style1_span1">03</span><span class="reason03_style1_span2">経済産業省から認定された信頼性</span></p>
          <hr style="border:1px dotted #BDB7B7;">
          <p class="reason03_style1_p1">ストラーダ税理士法人は、経営革新認定支援機関として、経済産業省に認定された登録機
            関です。経営革新認定支援機関が、事業計画を作成することにより、融資の通過率の増加
            や金利が減少する場合があります。また、補助金についても、補助金を得られる確率が増
            加します。
            <br />※実際に、補助金をご依頼頂く場合は、別途費用を頂戴致しますので、ご留意ください。
          </p>
          <div class="reason03_style1_img1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage_6つの理由img03.jpg" alt=""
              class="reason03_style1_img1_1" />
          </div>
        </div>
      </div>
      <div class="reason04_style1">
        <div class="reason04_style1_borderin1">
          <p><span class="reason04_style1_span1">04</span><span
              class="reason04_style1_span2">チャットワークを使用し素早いレスポンスを実現</span></p>
          <hr style="border:1px dotted #BDB7B7;">
          <p class="reason04_style1_p1">弊社では、基本的には、チャットワークというビジネスチャットでやり取りさせて頂いており
            ます。お客様ごとの、弊社の従業員を含めた、チャットグループを作成させて頂きます。不
            明な点等を気軽にチャットでご連絡頂ければ、適時に返信致します。もちろん、メール・電
            話対応も行っておりますので、チャットワークをご利用いただかなくても結構です。 </p>
          <div class="reason04_style1_img1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage_6つの理由img04.jpg" alt=""
              class="reason04_style1_img1_1" />
          </div>
        </div>
      </div>
    </div>
    <div class="reasonline3">
      <div class="reason05_style1">
        <div class="reason05_style1_borderin1">
          <p><span class="reason05_style1_span1">05</span><span class="reason05_style1_span2">効率的なサポート体制と豊富な税制知識</span>
          </p>
          <hr style="border:1px dotted #BDB7B7;">
          <p class="reason05_style1_p1">毎年一回税制改正が行われます。 ストラーダでは、最新の税制に基いてお客様が安定経
            営ができるように、最新の情報を入手・発信致します。 また、効率化の観点から、全てのお
            客様に電子申告で申告作業を致します。 そのため、決算申告の間際に、お客様に申告の作
            業で押印を頂く必要がありません。</p>
          <div class="reason05_style1_img1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage_6つの理由img05.jpg" alt=""
              class="reason05_style1_img1_1" />
          </div>
        </div>
      </div>
      <div class="reason06_style1">
        <div class="reason06_style1_borderin1">
          <div class="reason06_style1_title">
            <div class="reason06_style1_span1">06</div>
            <div class="reason06_style1_span2">公認会計士や社労士、行政書士が在籍しているから出来る、ビジネス全体のアドバイス</div>
          </div>
          <hr style="border:1px dotted #BDB7B7;">
          <p class="reason06_style1_p1">税理士は、税金の計算や税金に関するアドバイスをさせて頂きます。一方で公認会計士
            は、税金以外の決算書に関するアドバイスをさせて頂きます。企業運営には、税金の計算
            だけではなくて、財務、会計、経営、倒産リスク等考える必要がある項目は、多くあります。そ
            のような場合、税務以外の相談も、私たちが培った長年の経験を生かして、アドバイスさせ
            て頂きます。</p>
          <div class="reason06_style1_img1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage_6つの理由img06.jpg" alt=""
              class="reason06_style1_img1_1" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end 選ばれる6つの理由 -->
    </div>
    </div>
  </div>
  <!-- end Message -->

  <!-- start Strada Group -->
  <div id="StradaGroup" class="block_wrap2">
    <div class="border-text2"></div>
    <div class="l-container">
    <div id="block_wrap2" class="title_item_wrap2 active2">
      <p class="chapter_title2">Strada Group
      <div class="circle2"></div>
      </p>
    </div>
    </div>
    <div class="border-bt2"></div>
    <div class="l-container">
    <div id="list_wrap2" class="node_wrap2 node_wrap_show2">
      <div class="Strada_style">
        <div class="Strada_style_img1">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/Strada Group_icon.png" alt=""
            class="Strada_style_img1_1" />
        </div>
        <hr style="border:1px dotted #BDB7B7;">
        <p style="font-size:14px;padding-top:5px;padding-bottom:5px">ストラーダグループとは、　
          <span style="color: #00a159; font-weight: bold;">■ビジネスコンサル：ストラーダビジネスサポート株式会社　</span>
          <span style="color: #003e75; font-weight: bold;">■税理士：ストラーダ税理士法人 </span>
          <span style="color: #684799; font-weight: bold;">■公認会計士：ストラーダ公認会計士 </span>
          <span style="color: #e17401; font-weight: bold;">■社会保険労務士：ストラーダ </span>
          <span style="color: #e17401; font-weight: bold;">社会保険労務士 </span>
          <span style="color: #b3752a; font-weight: bold;">■中小企業診断士：中小企業労働企画開発協会 </span>
          <span style="color: #808c96; font-weight: bold;">■行政書士：ストラーダ行政書士 </span>
          <span style="color: #b8183f; font-weight: bold;">■不動産：タックス・リアルティ株式会社　</span>
          <span style="color: #221815;">が在籍しています。ストラーダグループとして、企 </span>
          <span style="color: #221815;">業の戦略を下支する、バックオフィス業務の専門家集団です。バックオフィス業務を総合的な支援をさせて頂くことにより、
            会社の全体戦略に基づいたアドバイスを可能としております。</span>
        </p>
        <hr style="border:1px dotted #BDB7B7;">
      </div>
      </div>
    </div>
  </div>
  <!-- end Strada Group -->

  <!-- start Service -->
  <div id="Service" class="block_wrap3">
    <div class="border-text3"></div>
    <div class="l-container">
    <div id="block_wrap3" class="title_item_wrap3 active3">
      <p class="chapter_title3">Service
      <div class="circle3"></div>
      </p>
    </div>
    </div>
    <div class="border-bt3"></div>
    <div class="l-container">
    <div id="list_wrap3" class="node_wrap3 node_wrap_show3">
    <?php get_template_part('template', 'sz-service'); ?>
    </div>
    </div>
  </div>
  <!-- end Service -->

  <!-- start Voice -->
  <div id="Voice" class="block_wrap4">
    <div class="border-text4"></div>
    <div class="l-container">
    <div id="block_wrap4" class="title_item_wrap4 active4">
      <p class="chapter_title4">Voice
      <div class="circle4"></div>
      </p>
    </div>
    </div>
    <div class="border-bt4"></div>
    <div class="l-container">
    <div id="list_wrap4" class="node_wrap4 node_wrap_show4">
    <?php get_template_part('template', 'voice_sz'); ?>
    </div>
    </div>
  </div>
  <!-- end Voice -->

  <!-- start Q&A -->
  <div id="QA" class="block_wrap5">
    <div class="border-text5"></div>
    <div class="l-container">
    <div id="block_wrap5" class="title_item_wrap5 active5">
      <p class="chapter_title5">Q&A
      <div class="circle5"></div>
      </p>
    </div>
    </div>
    <div class="border-bt5"></div>
    <div class="l-container">
    <div id="list_wrap5" class="node_wrap5 node_wrap_show5">
        <?php get_template_part('template', 'qa_sz'); ?>
      </div>
    </div>
    </div>
  <!-- end Q&A -->

  <!-- start Column -->
  <div id="Column" class="block_wrap6">
    <div class="border-text6"></div>
    <div class="l-container">
    <div id="block_wrap6" class="title_item_wrap6 active6">
      <p class="chapter_title6">Column
      <div class="circle6"></div>
      </p>
    </div>
    </div>
    <div class="border-bt6"></div>
    <div class="l-container">
    <div id="list_wrap6" class="node_wrap6 node_wrap_show6">
    <?php get_template_part('template', 'sz-column'); ?>
    </div>
    </div>
  </div>
  <!-- end Column -->

  <!-- start About -->
  <div id="About" class="block_wrap7">
    <div class="border-text7"></div>
    <div class="l-container">
    <div id="block_wrap7" class="title_item_wrap7 active7">
      <p class="chapter_title7">About
      <div class="circle7"></div>
      </p>
    </div>
    </div>
    <div class="border-bt7"></div>
    <div class="l-container">
    <div id="list_wrap7" class="node_wrap7 node_wrap_show7">
    <?php get_template_part('template', 'about_sz'); ?>
    <div id="menber" class="menberTtile">
          <span>メンバー紹介</span>
      </div>
    <div class="p-member__list">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
        $args = array(
          'post_type' => 'members',
          'company' => 'SZ', // 自定义字段名
          'posts_per_page' => -1,
          'orderby' => 'date',
          'paged' => $paged,
          'post__not_in' => array($post->ID)
        );

        $the_query = new WP_Query($args); ?>
        <?php
        if($the_query->have_posts()) :
          while($the_query->have_posts()) : $the_query->the_post();?>
            <div class="item">
              <div class="image">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full');
                  } else {
                ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="<?php the_title(); ?>">
                <?php } ?>
              </div>
              <div class="txt">
                  <p class="name"><?php echo get_the_title(); ?></p>
                <div class="c-job">
                  <?php
                      $terms = wp_get_post_terms($post->ID,'taxonomy_position', array(
                          'hide_empty' => false,
                          'parent' => 0,
                          'order' => 'ASC',
                          'orderby' => 'term_id'
                      ) );
                      $index=0;
                      foreach ( $terms as $term) {
                        $tax_link = get_term_link($term->slug, 'taxonomy_position');
                        $tax_name = $term->name;
                        $tax_slug = $term->slug;
                        if($index===0){
                            echo '<p class="job">'.$tax_name.'</p>';
                        }else{
                            echo '<p class="job">/'.$tax_name.'</p>';
                        }
                          $index++;
                      }
                    ?>

                </div>
                  <div class="read-more">
                  <img src="<?php echo home_url('/wp-content/uploads/2023/07/2024072740511_icon.png'); ?>"">
                  </div>

              </div>
              <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
            </div>

            <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
            <div class="title">
              <li>
                <p>
                  <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
              </li>
            </div>
            <?php endif;?>
    </div></div>
</div>
    </div>
    </div>
  </div>
  <!-- end About -->

  <!-- start Contact -->
  <div class="block_wrap8">
    <div class="border-text8"></div>
    <div class="l-container">
    <div id="block_wrap8" class="title_item_wrap8 active8">
      <p class="chapter_title8">Contact
      <div class="circle8"></div>
      </p>
    </div>
    </div>
    <div class="border-bt8"></div>
    <div class="l-container">
    <div id="list_wrap8" class="node_wrap8 node_wrap_show8">
    <?php get_template_part('template', 'contact_sz'); ?>
    </div>
    </div>
  </div>
  <!-- end Contact -->

  <!-- start Recruit -->
  <div id="Recruit" class="block_wrap9">
    <div class="border-text9"></div>
    <div class="l-container">
    <div id="block_wrap9" class="title_item_wrap9 active9">
      <p class="chapter_title9">Recruit
      <div class="circle9"></div>
      </p>
    </div>
    </div>
    <div class="border-bt9"></div>
    <div class="l-container">
    <div id="list_wrap9" class="node_wrap9 node_wrap_show_new">
        <?php get_template_part('template', 'recruit_sz'); ?>
    </div>
    </div>
  </div>
  <!-- end Recruit -->
</main>

<?php get_footer(); ?>