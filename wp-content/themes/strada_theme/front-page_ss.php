<?php get_header("ss");
/* Template Name: Front Page SS */
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-top">
  <!-- start imageplay -->
  <div class="imageplay">
    <!-- picture area -->
    <ul>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SS/SS_Top_Panel01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SS/SS_Top_Panel01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SS/SS_Top_Panel01.png"
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
      <div class="news_style1"><iframe src="https://www.youtube.com/embed/xGmXxpIj6vs" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
          style="width:100%;height:90%"></iframe>
        <p style="padding:0;margin:0;border:0">ストラーダ公認会計士事務所紹介動画 Youtube</p>
      </div>
      <div class="news_style2">
      <div class="c-list-news">
      <a href="<?php echo home_url('bs/bsnewslist'); ?>" style="text-decoration:none">
              <div style="display: flex;overflow-x: hidden;width:100%">
                <div style="width:80%;color:#EC7700;font-weight:bold;">ニュース</div>
                <div style="width:100px;color:black">READ MORE</div>
                <div style="position:relative;top:-5px">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/news_more.png" alt=""
                    style="width:30px" />
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
              'company' => 'SS', // 自定义字段名
          );
          $query = new WP_Query( $args ); // 执行查询
          ?>
          <?php while (  $query->have_posts() ) : $query->the_post(); ?>
          <a href="<?php echo get_permalink(get_the_ID()); ?>" class="c-new">
            <div class="c-new__date">
              <?php echo get_the_date('Y.m.d'); ?>
            </div>
            <div class="c-new__title">
              <?php echo get_the_title(); ?>
            </div>
           <hr class="c-line-bottom" />
          </a>
             <?php endwhile; ?>

<!--          --><?php //if(function_exists('wp_pagenavi')) { ?>
<!--              --><?php //wp_pagenavi(); ?>
<!--          --><?php //} ?>

      </div>
        <?php
        if (function_exists("pagination")) {

            pagination($query->max_num_pages);
        }
        ?>
<!--        <div class="c-pagination">-->
<!--            --><?php // wp_pagenavi(); ?>
<!--        </div>-->
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
        <p class="Message_style1_p3">Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）Messege企業メッセージ（TOPメッセージ＋コンセプトなど）</p>
        <p class="Message_style1_p4">ストラーダ社会保険労務士法人　代表社員</p>
        <p class="Message_style1_p5">宿谷 裕樹</p>
        <hr style="border:1px dotted #BDB7B7;">
      </div>
      <div class="Message_style2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_SS/SZ_member_03_Shukuya.jpg" alt=""
          class="Message_style1_img" />
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
        <p style="font-size:12px;padding-top:5px;padding-bottom:5px">ストラーダグループとは、　
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
  <div class="block_wrap3">
    <div class="border-text3"></div>
    <div id="block_wrap3" class="title_item_wrap3 active3">
      <p class="chapter_title3">Service
      <div class="circle3"></div>
      </p>
    </div>
    <div class="border-bt3"></div>
    <div class="l-container">
    <div id="list_wrap3" class="node_wrap3 node_wrap_show3">
    <?php get_template_part('archive', 'sr-service'); ?>
    </div>
    </div>
  </div>
  <!-- end Service -->

  <!-- start Q&A -->
  <div class="block_wrap4">
    <div class="border-text4"></div>
    <div id="block_wrap4" class="title_item_wrap4 active4">
      <p class="chapter_title4">Q&A
      <div class="circle4"></div>
      </p>
    </div>
    <div class="border-bt4"></div>
    <div class="l-container">
    <div id="list_wrap4" class="node_wrap4 node_wrap_show4">
    <?php get_template_part('template', 'qa_ss'); ?>
    </div>
    </div>
  </div>
  <!-- end Q&A -->

  <!-- start About -->
  <div class="block_wrap5">
    <div class="border-text5"></div>
    <div id="block_wrap5" class="title_item_wrap5 active5">
      <p class="chapter_title5">About
      <div class="circle5"></div>
      </p>
    </div>
    <div class="border-bt5"></div>
    <div id="list_wrap5" class="node_wrap5 node_wrap_show5">
    <div class="l-container">
        <?php get_template_part('template', 'about_ss'); ?>
      </div>
    </div>
  </div>
  <!-- end About -->

  <!-- start Price -->
  <div class="block_wrap6">
    <div class="border-text6"></div>
    <div id="block_wrap6" class="title_item_wrap6 active6">
      <p class="chapter_title6">Price
      <div class="circle6"></div>
      </p>
    </div>
    <div class="border-bt6"></div>
    <div class="l-container">
    <div id="list_wrap6" class="node_wrap6 node_wrap_show6">
    
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
  <div class="block_wrap9">
    <div class="border-text9"></div>
    <div id="block_wrap9" class="title_item_wrap9 active9">
      <p class="chapter_title9">Recruit
      <div class="circle9"></div>
      </p>
    </div>
    <div class="border-bt9"></div>
    <div class="l-container">
    <div id="list_wrap9" class="node_wrap9 node_wrap_show_new">
        <?php get_template_part('template', 'recruit_ss'); ?>
    </div>
    </div>
  </div>
  <!-- start Recruit -->

</main>

<?php get_footer(); ?>