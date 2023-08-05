<?php
/* Template Name: Archive CH Service */
get_header("ch");
session_start();
$_SESSION['url_type']="ch";
$_SESSION['page_type']="service";
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
            事業内容
          <span>Service</span>
        </h1>
      </div>
    </div>
  </div>
    <hr class="service-line-bottom" />
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
        <?php 
        
        foreach ( $terms as $term ) :
        $tax_link = get_term_link($term->slug, 'taxonomy_service');
        $tax_name = $term->name;
        $tax_slug = $term->slug;
        $img = get_field('service_cat_thumbnail', $term);
        ?>
          <div class="serviceItem">
              <span class="ttl"><?php echo $tax_name; ?></span>
            <div class="thumb">
              <img src="<?php echo $img['url'] ?>" alt="">
            </div>

            <div class="content">
                <div style="height: 200px;">
              <p><?php echo nl2br($term->description); ?></p>
<!--              <div class="c-btn01 ">-->
                </div>
               <div class="ttl2 c-btn01__blue">
                <a href="<?php echo get_term_link($term) ?>">詳細はこちら</a>
              </div>
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

<?php get_footer('ch'); ?>