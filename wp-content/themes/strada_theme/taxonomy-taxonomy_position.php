<?php
get_header();
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-member01">
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
          メンバー紹介
          <span>MEMBER</span>
        </h1>
      </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
  <div class="l-container">
    <ul class="p-member01__link" id="myBtnContainer">
      <li><a href="<?php echo get_post_type_archive_link('members'); ?>">ALL</a></li>
      <?php
          $terms = get_terms( 'taxonomy_position', array(
            'hide_empty' => false,
            'parent' => 0,
            'order' => 'ASC',
            'orderby' => 'term_id'
          ) );
          foreach ( $terms as $term ) {
            $tax_link = get_term_link($term->slug, 'taxonomy_x');
            $tax_name = $term->name;
            $tax_slug = $term->slug;
            $curren_term_id = get_queried_object_id();
            $curren_term_id == $term->term_id ? $cls_active = "is-active" : $cls_active = "" ;
            echo '<li class="'.$cls_active.'"><a href="'.get_term_link($term).'">'.$tax_name.'</a></li>';
          }
      ?>
    </ul>
    <div class="p-member__list">
      <?php while ( have_posts() ) : the_post(); ?>
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
            <div class="c-job">
              <?php
                $terms = wp_get_post_terms($post->ID,'taxonomy_position', array(
                    'hide_empty' => false,
                    'parent' => 0,
                    'order' => 'ASC',
                    'orderby' => 'term_id'
                ) );
                foreach ( $terms as $term) {
                  $tax_link = get_term_link($term->slug, 'taxonomy_position');
                  $tax_name = $term->name;
                  $tax_slug = $term->slug;
                  echo '<p class="job">' . $tax_name . '</p>';
                }
              ?>
            </div>
            <p class="name"><?php echo get_the_title(); ?></p>
          </div>
          <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>