<?php
get_header();
session_start();
$_SESSION['url_type']="";
$_SESSION['page_type']="columns";
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-column">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle">
    <div class="c-tlt01 c-tlt01__black">
      <h1 class="c-tlt01__line c-tlt01__line--gray">
        お役立ち情報
        <span>column</span>
      </h1>
    </div>
  </div>
  <!-- end c-mainTitle -->
  <div class="l-container">
    <div class="p-column__01">
      <h2 class="c-tlt03">
        おすすめ記事
      </h2>
      <div class="p-column__list">
        <?php
          $recommendPosts = array();
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'paged' => $paged,
              'meta_query' => array(
                  array(
                      'key'     => 'recommend',
                      'value'   => '"yes"',
                      'compare' => 'LIKE'
                  )
              )
          );

          $the_query = new WP_Query($args);
          if($the_query->have_posts()) :
              while($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php array_push($recommendPosts, get_the_id()); ?>
                  <div class="item">
                    <div class="image">
                      <?php
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail('post-size');
                        } else {
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image-qq.jpg" alt="<?php the_title(); ?>">
                      <?php } ?>
                    </div>
                    <div class="txt">
                      <p class="date-cat">
                        <span class="date"><?php echo get_the_date('Y.m.j'); ?></span>
                        <?php
                          $terms = wp_get_post_terms($post->ID, 'category', array(
                              'hide_empty' => false,
                              'parent' => 0,
                              'order' => 'ASC',
                              'orderby' => 'term_id'
                          ) );
                          foreach ( $terms as $term) {
                              $tax_link = get_term_link($term->slug, 'category');
                              $tax_name = $term->name;
                              $tax_slug = $term->slug;
                              echo '<span class="cat">'.$tax_name.'</span>';
                          }
                          ?>
                      </p>
                      <p class="title"><?php echo get_the_title(); ?></p>
                      <div class="content">
                        サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                      </div>
                    </div>
                    <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
                  </div>
              <?php endwhile;
              wp_reset_postdata();
          else:
              ?>
              <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
              <?php
          endif;
        ?>
      </div>
    </div>
    <div class="p-column__02">
      <div class="p-column__main">
        <div class="p-column__list">
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'orderby' => 'date',
                'paged' => $paged,
                'post__not_in' => $recommendPosts

            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="item">
                      <div class="image">
                        <?php
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-size');
                          } else {
                        ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image-qq.jpg" alt="<?php the_title(); ?>">
                        <?php } ?>
                      </div>
                      <div class="txt">
                        <p class="date-cat">
                          <span class="date"><?php echo get_the_date('Y.m.j'); ?></span>
                          <?php
                            $terms = wp_get_post_terms($post->ID, 'category', array(
                                'hide_empty' => false,
                                'parent' => 0,
                                'order' => 'ASC',
                                'orderby' => 'term_id'
                            ) );
                            foreach ( $terms as $term) {
                                $tax_link = get_term_link($term->slug, 'category');
                                $tax_name = $term->name;
                                $tax_slug = $term->slug;
                                echo '<span class="cat">'.$tax_name.'</span>';
                            }
                            ?>
                        </p>
                        <p class="title"><?php echo get_the_title(); ?></p>
                        <div class="content">
                          サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </div>
                      </div>
                      <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else:
                ?>
                <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
                <?php
            endif;
          ?>
        </div>
        <?php if(function_exists('wp_pagenavi')) { ?>
        <?php wp_pagenavi(); ?>
        <?php } ?>
      </div>
      <div class="l-sidebar">
        <?php get_sidebar('sidebar'); ?>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>