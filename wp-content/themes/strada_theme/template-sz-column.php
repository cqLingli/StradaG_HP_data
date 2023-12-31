
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-column">
    <div class="l-container">
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle  template-column_add">
    <div class="c-mainTitle_content">
    <div class="c-tlt01 c-tlt01__black">
      <h1 class="c-tlt01__line c-tlt01__line--gray">
        <?php
              echo 'お役立ち情報 ';
            ?>
            <span>column</span>
      </h1>
    </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
    </div>
    <div class="c-new-content">
  <div class="l-container">
    <?php  $recommendPosts = array(); ?>
    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
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
    ?>
    <?php if(is_page('columns') && ($the_query->found_posts != 0)) : ?>
      <div class="p-column__01">
        <h2 class="c-tlt04">
          おすすめ記事
        </h2>
        <div class="p-column__list">
          <?php
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
                        <div class="content line-clamp line-clamp--2">
                          <?php echo strip_tags(get_the_excerpt()); ?>
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
    <?php endif; ?>
    <div class="p-column__02">
      <div class="p-column__main">
          <div class="menberTtile">
              <span>お役立ち情報</span>
          </div>
        <div class="p-column__list">
          <?php
            if(get_query_var('year') != 0){
              query_posts(array('post_type' =>'post', 'posts_per_page' => 4,'orderby' => 'date', 'year' => get_query_var('year'),'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts) );
            }elseif(get_query_var('monthnum') != 0){
              $args = array( 'post_type' => 'column','posts_per_page' => 4,'year' => get_query_var('year'),'orderby' => 'date', 'paged' => get_query_var( 'paged' ) );
              query_posts(array('post_type' =>'post', 'posts_per_page' => 4,'orderby' => 'date', 'year' => get_query_var('year'),'monthnum' => get_query_var('monthnum'), 'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts) );
            }elseif(is_category()){
              query_posts(array('post_type' =>'post', 'posts_per_page' => 4,'orderby' => 'date', 'cat' => get_queried_object_id(), 'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts));
            }elseif(is_tag()){
              query_posts(array('post_type' =>'post', 'posts_per_page' => 4,'orderby' => 'date', 'tag__in' => get_queried_object_id(), 'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts));
            }elseif(is_front_page()){
              query_posts(array('post_type' =>'post', 'posts_per_page' => 4,'orderby' => 'date', 'paged' => get_query_var( 'page' ), 'post__not_in' => $recommendPosts) );
            }else {
              query_posts(array('post_type' =>'post', 'posts_per_page' => 4,'orderby' => 'date', 'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts) );
            }

            if(have_posts()) :
                while(have_posts()) : the_post(); ?>
                    <div class="item">
                      <div class="image">
                        <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail( 'kv-size');
                          } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="" class="img">
                          <?php }
                        ?>
                      </div>
                      <div class="txt">
                        <p class="date-cat">
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
                            <span class="date"><?php echo get_the_date('Y.m.j'); ?></span>
                        </p>
                        <p class="title line-clamp line-clamp--2"><?php echo get_the_title(); ?></p>
                        <div class="content line-clamp line-clamp--2">
                          <?php echo strip_tags(get_the_excerpt()); ?>
                        </div>
<!--                          <div class="column-read-more">-->
<!--                              <img src="--><?php //echo home_url('/wp-content/uploads/2024/07/2024072740511_icon.png'); ?><!--"">-->
<!--                          </div>-->
                          <div class="columns_title_icon">
                              <span>READ MORE</span>
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
      <div class="l-sidebar">
        <?php get_sidebar('topsz'); ?>
      </div>
    </div>
  </div>
    </div>
</main>


