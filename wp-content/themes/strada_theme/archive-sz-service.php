<?php
/* Template Name: Archive Sz Service */
get_header("sz");
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle service_1-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
            事業内容
          <span>Service</span>
        </h1>
      </div>
    </div>
  </div>

    <div class="service_title_01">
        <hr class="service-line-bottom2" />
    <p style="margin-top: 10px;">私たちは、企業が誕生して、軌道に乗り、成長していく姿を数多く見てきました。</p>
    <p>その中で、資金調達、補助金の取得、資本政策に基づく、会社のM&Aや上場等の企業の大きなライフイベントが発生します。</p>
    <p>そんな、会社のライフイベントで頼りになる存在であり続けたいと考えております。</p>
        <hr class="service-line-bottom2" />
    </div>

  <!-- end c-mainTitle -->
    <div class="c-new-content">
  <div class="l-content">
    <div class="l-container">
      <?php 
          $terms = get_terms( 'taxonomy_service', array(
            'hide_empty' => false,
            'parent' => 0,
            'order' => 'ASC',
            'orderby' => 'menu_order'
          ) );
      ?>
      <div class="c-serviceList">
          <div class="menberTtile">事業内容</div>
          <div style="height: 10px;"></div>
        <?php 
           $index=0;
        foreach ( $terms as $term ) :
        $tax_link = get_term_link($term->slug, 'taxonomy_service');
        $tax_name = $term->name;
        $tax_slug = $term->slug;
        $img = get_field('service_cat_thumbnail', $term);
        $index++;
        ?>
          <div class="<?php
          if($index%3==1){
             echo "serviceItem_top";
          }else{
              echo "serviceItem_top2";
          }
          ?>">
            <div class="thumb">
              <img src="<?php echo $img['url'] ?>" alt="">
            </div>
              <div class="service_title_icon">
              <a  href="<?php echo get_term_link($term) ?>">
              <span><?php echo $tax_name; ?></span>
              </a>
              </div>
            <div class="content">
                <div>
              <p class="description_box"><?php echo nl2br($term->description); ?></p>
<!--              <div class="c-btn01 ">-->
                </div>
<!--               <div class="ttl2 c-btn01__blue">-->
<!--                <a href="--><?php //echo get_term_link($term) ?><!--">詳細はこちら</a>-->
<!--              </div>-->
            </div>

          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </div>
    </div>
</main>

<?php get_footer('sz'); ?>