<?php
get_header();
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-member02">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="l-container">
    <div class="p-member02__box">
      <div class="image">
        <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
          }
        ?>
      </div>
      <div class="txt">
        <p class="job">
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
              echo $tax_name;
            }
          ?>
        </p>
        <p class="name"><?php echo get_the_title(); ?></p>
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
      </div>
    </div>
    <div class="p-member__list">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
        $args = array(
          'post_type' => 'members',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'paged' => $paged,
          'post__not_in' => array($post->ID)
        );

        $the_query = new WP_Query($args); ?>
        <?php
        if($the_query->have_posts()) :
          while($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <p class="job">
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
                        echo $tax_name;
                      }
                    ?>
                </p>
                <p class="name"><?php echo get_the_title(); ?></p>
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
            
      <!-- <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img03.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">税理士</p>
          <p class="name">星野 隆介</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img04.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">宿谷</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img05.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">吉永</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img06.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">鈴木</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img07.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">宮口</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img08.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">伊藤</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img09.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">奥崎</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img10.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">山下</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img11.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">古野</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img12.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">片岡</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img13.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">三宅</p>
        </div>
        <a href="#"></a>
      </div>
      <div class="item">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/member/img14.jpg" alt="" />
        </div>
        <div class="txt">
          <p class="job">役職名入ります</p>
          <p class="name">小川</p>
        </div>
        <a href="#"></a>
      </div> -->
    </div>
  </div>
</main>


<?php get_footer(); ?>