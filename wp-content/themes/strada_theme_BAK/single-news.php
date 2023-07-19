<?php
get_header();
?>
<main class="l-main p-new02">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <div class="c-new-content">
    <div class="l-container">
      <div class="c-wrap-new">
        <div class="date"><?php echo get_the_date('Y.j.m') ?></div>
        <div class="title"><?php echo get_the_title(); ?></div>
        <div class="content">
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) { the_post();
                the_content();
              }
              wp_reset_query();
            }
          ?>
        </div>
        <a href="<?php echo get_post_type_archive_link('news'); ?>" class="c-back-list">
          一覧へ戻る
          <span class="i-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/new02/i_arrow.svg" alt="" />
          </span>
        </a>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>