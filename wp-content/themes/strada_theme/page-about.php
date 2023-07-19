<?php
/* Template Name: About Page */
get_header();
?>
 <!-- .l-main | メインコンテンツ -->
  <main class="l-main p-about">
    <div class="c-breakcrumds">
      <div class="l-container">
        <?php if (function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      endif;
    ?>
    <?php get_template_part( 'template', 'access' ); ?>
  </main>
<?php get_footer(); ?>