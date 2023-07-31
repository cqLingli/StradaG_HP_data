<?php get_header("");
/* Template Name: Front Page */
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
          <p style="padding:0;margin:0;border:0">ストラーダグループ紹介動画 Youtube</p>
        </div>
        <div class="news_style2">
        <div class="t-news_list_topbox">
            <!-- <a href="<?php //echo home_url('tax/taxnewslist'); ?>" style="text-decoration:none"> -->
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
            );
            $query = new WP_Query($args); // 执行查询
            ?>
            <ul>
            <?php 
              if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>
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
          <p class="Message_style1_p3">
            　ストラーダグループとは、税理士、公認会計士、社会保険労務士、中小企業診断士、行政書士が在籍している士業の専門家集団です。<br /><br />　私たちは、時代の先端の情報を収集して、バックオフィスのあらゆる業務を解決できる集団になるべく精進しております。<br />　上場企業、大会社、社会福祉法人等でも、経理、人事、総務等の役割に応じて、部署が分かれていますが、会社の目指すべき方向は一つです。<br />　各種部署が連携しながら、会社が目指すべき方向について、議論しています。その機能を私
            たち士業が担います。<br />　ストラーダグループとして、総合的な支援をさせて頂くことにより、会社の全体戦略や方向性
            に基づいたアドバイスが可能になるのです。</p>
          <p class="Message_style1_p4">ストラーダホールディングス株式会社 CEO</p>
          <p class="Message_style1_p5">山田 直輝</p>
          <hr style="border:1px dotted #BDB7B7;">
        </div>
        <div class="Message_style2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/SZ_TOP_Massage.png" alt=""
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

  <!-- start About -->
  <div class="block_wrap7">
    <div class="border-text7"></div>
    <div id="block_wrap7" class="title_item_wrap7 active7">
      <p class="chapter_title7">About
      <div class="circle7"></div>
      </p>
    </div>
    <div class="border-bt7"></div>
    <div class="l-container">
      <div id="list_wrap7" class="node_wrap7 node_wrap_show7">
        <?php get_template_part('template', 'about'); ?>
      <div class="menberTtile">
          <span>メンバー紹介</span>
      </div>
    <div class="p-member__list">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
        $args = array(
          'post_type' => 'members',
          'company' => '', // 自定义字段名
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
                  <img src="<?php echo home_url('/wp-content/uploads/2023/07/20230727100511_icon.png'); ?>"">
                  </div>

              </div>
              <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
            </div>

          <?php endwhile;
          if (function_exists("pagination")) {
            pagination($the_query->max_num_pages);
          }
          wp_reset_postdata();
        else:
          ?>
          <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
          <?php
        endif;
      ?>
    </div>
  </div>
	   </div>
  </div>
      </div>
    </div>
  <!-- end About -->

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
        <?php get_template_part('template', 'contact'); ?>
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
        <?php get_template_part('template', 'recruit'); ?>
      </div>
    </div>
  </div>
  <!-- start Recruit -->

</main>

<?php get_footer(); ?>