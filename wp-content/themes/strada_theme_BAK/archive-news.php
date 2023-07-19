<?php
get_header();
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-new01">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <div class="c-mainTitle">
    <img src="<?php echo get_template_directory_uri(); ?>/images/new01/mv.jpg" alt="" />
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
          ニュース
          <span>NEWS</span>
        </h1>
      </div>
    </div>
  </div>
  <div class="c-new-content">
    <div class="l-container">
      <div class="c-list-news">
        <?php while ( have_posts() ) : the_post(); ?>
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
        <div class="c-pagination">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>