<?php
get_header();
?>

<?php 
  $qo = get_queried_object();
  $mv = get_field('service_cat_mv', $qo);
?>
<style>
  .p-service .c-mainTitle{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  .p-service .c-mainTitle.c-mainTitle-<?php echo $qo->slug; ?>{
    background-image:url(<?php echo $mv['url']; ?>);
  }

</style>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">

  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle c-mainTitle-<?php echo $qo->slug; ?> c-mainTitle-overlay">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
          <?php echo single_term_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
  <div class="l-container">
    <div class="l-content">
      <div class="c-serviceList">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php                 
          $repeater = get_field('s_repeat');              
        ?>
        <div class="serviceItem">
            <div class="thumb">
              <?php
                if($repeater != null){
                  foreach($repeater as $repeat){     
                    if($repeat['s_repeat_taxonomy'] == $qo->slug){
                      $active = 1;
                    }
                  }
                }
                if($repeater != null && $active){
                  ?>
                  <img src="<?php echo $repeat['s_repeat_img']['url']; ?>" alt="nophoto">
                  <?php
                }else{
                  if (has_post_thumbnail()) {
                    echo get_the_post_thumbnail();
                  } else { ?>
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/no-image-sq.jpg" alt="nophoto">
                  <?php }
                }
              ?>
            </div>
            <div class="content">
              <h2 class="ttl"><?php the_title(); ?></h2>
              <p><?php echo nl2br(get_the_excerpt()); ?></p>
              <div class="c-btn01 c-btn01__blue">
                <a href="<?php echo get_the_permalink() ?>">詳細はこちら</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>