<?php get_header("sg");
/* Template Name: Front Page SG */
session_start();
$_SESSION['url_type']="sg";
$_SESSION['page_type']="top";
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-top">
  <!-- start imageplay -->
  <div class="imageplay">
    <!-- picture area -->
    <ul>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/Strada_Admin_Slider_01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/Strada_Group_Slider_01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/Strada_Group_Slider_01.png"
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
    <div id="block_wrap" class="title_item_wrap active">
      <p class="chapter_title">What's New
      <div class="circle"></div>
      </p>
    </div>
    <div class="border-bt"></div>
    <div class="l-container">
      <div id="list_wrap" class="node_wrap node_wrap_show">
        <div class="news_style1"><iframe src="https://www.youtube.com/embed/D5-5j3AoQvw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;height:90%"></iframe>
          <p style="padding:0;margin:0;border:0">Youtubeストラーダグループチャンネル</p>
        </div>
        <div class="news_style2">
          <div class="t-news_list_topbox">
            <a href="<?php echo home_url('sg/adminnewslist'); ?>" style="text-decoration:none">
              <div style="display: flex;overflow-x: hidden;width:100%">
                <div style="width:80%;color:#003E75;font-weight:bold;font-size:15px;">ニュース</div>
                <div style="width:100px;color:black">READ MORE</div>
                <div style="position:relative;top:-5px">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/news_more.png" alt="" style="width:30px" />
                </div>
              </div>
            </a>
            <hr style="border:1px dotted #BDB7B7;">
            <?php
            // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
              'post_type' => 'news', // 文章类型
              'posts_per_page' => 10,
              'paged' => $paged,
              'company' => 'SG', // 自定义字段名
            );
            $query = new WP_Query($args); // 执行查询
            ?>
            <ul>
              <?php
              if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                  <li>
                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                      <div class="time" style="float: left; width: 15%;">
                        <?php echo get_the_date('Y.m.d') ?>
                      </div>
                      <div class="time" style="float: right; width: 85%; padding-left: 5px;">
                        <?php echo get_the_title(); ?>
                      </div>
                    </a>
                  </li>
                <?php endwhile;
                wp_reset_postdata();
              else :
                ?>
                <div class="title">
                  <li>
                    <p>
                      <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                    </p>
                  </li>
                </div>
              <?php endif; ?>
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
    <div id="block_wrap1" class="title_item_wrap1 active1">
      <p class="chapter_title1">Message
      <div class="circle1"></div>
      </p>
    </div>
    <div class="border-bt1"></div>
    <div class="l-container">
    <div id="list_wrap1" class="node_wrap1 node_wrap_show1">
      <div class="Message_style1">
        <hr style="border:1px dotted #BDB7B7;">
        <p class="Message_style1_p3">　「ストラーダ」とは、イタリア語で「道」という意味があります。<br />　お客様と歩む長い道をともに歩み続けられるような行政書士となりたいという意味を込め
て、「ストラーダ行政書士法人」と名付けました。<br /><br />　行政書士の特徴は、お客様の新しい生活・事業に寄り添うパートナーとしての性質を有して
います。<br />　そのため、長期に渡ってお客様へ価値を提供できるように自己研鑽に励み、行政への申請面
はもちろん他の面においてもグループ内法人と共に価値を提供できるように努めてまいりま
す。<br />　また、企業に価値を提供するスタッフが長期に渡って働けるような社内環境を整え、新しいこ
とに挑戦し続ける事務所経営を行います。<br /><br /></p>
        <p class="Message_style1_p4">ストラーダ行政書士法人　代表社員</p>
        <p class="Message_style1_p5">星野 隆介</p>
        <hr style="border:1px dotted #BDB7B7;">
      </div>
      <div class="Message_style2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/SG_TOP_Massage.png" alt=""/>
      </div>
    </div>
    </div>
  </div>
  <!-- end Message -->

  <!-- start Strada Group -->
  <div class="block_wrap2">
    <div class="border-text2"></div>
    <div id="block_wrap2" class="title_item_wrap2 active2">
      <p class="chapter_title2">Strada Group
      <div class="circle2"></div>
      </p>
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
    <div id="block_wrap3" class="title_item_wrap3 active3">
      <p class="chapter_title3">Service
      <div class="circle3"></div>
      </p>
    </div>
    <div class="border-bt3"></div>

    <div id="list_wrap3" class="node_wrap3 node_wrap_show3">
    <?php get_template_part('template', 'sg-service'); ?>
    </div>
    </div>

  <!-- end Service -->

  <!-- start Case Study -->
  <div class="block_wrap4">
  <div style="display:flex">
    <div id="block_wrap4" class="title_item_wrap4 active4">
      <p class="chapter_title4">Case Study
      <div class="circle4"></div>
      </p>
      </div>
      <div class="border-text4">当社事例</div>
    </div>
    <div class="border-bt4"></div>
    <div class="l-container">
    <div id="list_wrap4" class="node_wrap4 node_wrap_show4">
    
    </div>
    </div>
  </div>
  <!-- end Case Study -->

  <!-- start About -->
  <div id="About" class="block_wrap6">
    <div class="border-text6"></div>
    <div id="block_wrap6" class="title_item_wrap6 active6">
      <p class="chapter_title6">About
      <div class="circle6"></div>
      </p>
    </div>
    <div class="border-bt6"></div>
    <div class="l-container">
    <div id="list_wrap6" class="node_wrap6 node_wrap_show6">
      <?php get_template_part('template', 'about_sg'); ?>
    </div>
    </div>
  </div>
  <!-- end About -->

  <!-- start Price -->
  <div id="Price" class="block_wrap7">
    <div class="border-text7"></div>
    <div id="block_wrap7" class="title_item_wrap7 active7">
      <p class="chapter_title7">Price
      <div class="circle7"></div>
      </p>
    </div>
    <div class="border-bt7"></div>
    <div class="l-container">
    <div id="list_wrap7" class="node_wrap7 node_wrap_show7">
    
    </div>
    </div>
  </div>
  <!-- end Price -->

  <!-- start Contact -->
  <div class="block_wrap8">
    <div class="border-text8"></div>
    <div id="block_wrap8" class="title_item_wrap8 active8">
      <p class="chapter_title8">Contact
      <div class="circle8"></div>
      </p>
    </div>
    <div class="border-bt8"></div>
    <div class="l-container">
    <div id="list_wrap8" class="node_wrap8 node_wrap_show8">
    
    </div>
    </div>
  </div>
  <!-- end Contact -->

  <!-- start Recruit -->
  <div id="Recruit" class="block_wrap9">
    <div class="border-text9"></div>
    <div id="block_wrap9" class="title_item_wrap9 active9">
      <p class="chapter_title9">Recruit
      <div class="circle9"></div>
      </p>
    </div>
    <div class="border-bt9"></div>
    <div class="l-container">
    <div id="list_wrap9" class="node_wrap9 node_wrap_show_new">
        <?php get_template_part('template', 'recruit_sg'); ?>
    </div>
    </div>
  </div>
  <!-- start Recruit -->

</main>

<?php get_footer(); ?>
