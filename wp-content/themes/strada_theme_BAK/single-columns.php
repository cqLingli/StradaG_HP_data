<?php
get_header();
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-column">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="l-container">
    <div class="p-column__03">
      <div class="p-column__post">
        <div class="box">
          <div class="date-cat">
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
          </div>
          <h1 class="box__title"><?php echo get_the_title(); ?></h1>
          <ul class="c-list__tag">
        <?php
        $terms = wp_get_post_terms($post->ID, 'post_tag', array(
          'hide_empty' => false,
          'parent' => 0,
          'order' => 'ASC',
          'orderby' => 'term_id'
        ) );
        // echo var_dump($term);
        foreach ( $terms as $term) {
          $tax_link = get_term_link($term->slug, 'post_tag');
          $tax_name = $term->name;
          $tax_slug = $term->slug;
        ?>
        <li><a href="<?php echo $tax_link; ?>"><?php echo $tax_name; ?></a></li>
        <?php
        }
        ?>
          </ul>
          <div class="box__image">
        <?php
        if (has_post_thumbnail()) {
          echo get_the_post_thumbnail();
        } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/column/02/main.jpg" alt="" />
        <?php }
        ?>
          </div>
      <div class="_content">
        <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <?php
        else :
        endif;
        ?>
        
      </div>
          <div class="box__author">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/column/02/faceicon.png" alt="" />
            </div>
            <div class="profile">
              <div class="profile__name">
                <span class="job">監修者</span>
                <span class="name">名前が入ります</span>
              </div>
              <div class="content">
                サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
              </div>
            </div>
          </div>
        </div>
        <div class="p-column__slider">
          <div class="p-column__list">
            <?php $prev_post = get_previous_post();
            if (!empty( $prev_post )): ?>
              <div class="item">
                <div class="image">
                  <?php
                    if (has_post_thumbnail($prev_post->ID)) {
                      echo get_the_post_thumbnail( $prev_post->ID,'kv-size' );
                    } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/column/img01.jpg" alt
                    <?php }
                    ?>
                  ="" />
                </div>
                <div class="txt">
                  <div class="content">
                    <?php
                    $count_text = strlen(mb_substr(strip_tags($prev_post-> post_title),0));
                    if($count_text > 60){
                      echo mb_substr(strip_tags($prev_post-> post_title),0,60).'…';
                    }
                    else{
                      echo mb_substr(strip_tags($prev_post-> post_title),0,60);
                    }
                    ?>
                  </div>
                </div>
                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" data-prev="前の記事"></a>
              </div>
            <?php endif;
            $next_post = get_next_post();
            if (!empty( $next_post )): ?>
              <div class="item">
                <div class="image">
                  <?php
                    if (has_post_thumbnail( $next_post->ID)) {
                      echo get_the_post_thumbnail( $next_post->ID,'kv-size' );
                    } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="" class="img">
                    <?php }
                    ?>
                </div>
                <div class="txt">
                  <div class="content">
                    <?php
                    $count_text = strlen(mb_substr(strip_tags($next_post-> post_title),0));
                    if($count_text > 60){
                      echo mb_substr(strip_tags($next_post-> post_title),0,60).'…';
                    }
                    else{
                      echo mb_substr(strip_tags($next_post-> post_title),0,60);
                    }
                    ?>
                  </div>
                </div>
                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" data-next="次の記事"></a>
              </div>
            <?php endif;?>
          </div>
        </div>
        <div class="p-column__New-Article">
          <p class="c-title">あなたにおすすめの記事</p>
          <div class="p-column__list">
            <?php
            $categories = get_the_category($post->ID);
            $category_ID = array();
            foreach($categories as $category):
                array_push( $category_ID, $category->cat_ID);
            endforeach ;
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                  'post_type' => 'columns',
                  'posts_per_page' => 3,
                  'orderby' => 'date',
                  'category__in' => $category_ID,
                  'paged' => $paged
              );

              $the_query = new WP_Query($args);
              if($the_query->have_posts()) :
                  while($the_query->have_posts()) : $the_query->the_post(); ?>
                      <div class="item">
                        <div class="image">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/column/img01.jpg" alt="" />
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
        <div class="p-column__wellRead-Article">
          <p class="c-title">よく読まれている記事</p>
          <div class="p-column__list">
            <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                  'post_type' => 'columns',
                  'posts_per_page' => 3,
                  'meta_key' => '_views','order' => 'desc',
                  'orderby' => 'meta_value_num',
                  'posts_per_page' => $instance['number'],
                  'orderby' => 'date',
                  'paged' => $paged
              );

              $the_query = new WP_Query($args);
              if($the_query->have_posts()) :
                  while($the_query->have_posts()) : $the_query->the_post(); ?>
                      <div class="item">
                        <div class="image">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/column/img01.jpg" alt="" />
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
        <div class="p-column__related-Article">
          <p class="c-title">この記事を見た人はこんな記事も見ています</p>
          <div class="p-column__list">
            <?php
              $tags = wp_get_post_tags(get_the_ID());
              $tag_ids = array();
              foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                  'post_type' => 'columns',
                  'posts_per_page' => 3,
                  'tag__in' => $tag_ids,
                  'post__not_in' => array($post->ID),
                  'orderby' => 'date',
                  'paged' => $paged
              );

              $the_query = new WP_Query($args);
              if($the_query->have_posts()) :
                  while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="item">
                      <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/column/img01.jpg" alt="" />
                      </div>
                      <div class="txt">
                        <p class="title"><?php echo get_the_title(); ?></p>
                        <p class="date-cat">
                          <span class="date"><?php echo get_the_date('Y.m.j'); ?></span>
                        </p>
                        <ul class="c-list__tag">
                          <?php
                            $terms = wp_get_post_terms($post->ID, 'post_tag', array(
                              'hide_empty' => false,
                              'parent' => 0,
                              'order' => 'ASC',
                              'orderby' => 'term_id'
                            ) );
                            // echo var_dump($term);
                            foreach ( $terms as $term) {
                              $tax_link = get_term_link($term->slug, 'post_tag');
                              $tax_name = $term->name;
                              $tax_slug = $term->slug;
                            ?>
                            <li><a href="<?php echo $tax_link; ?>"><?php echo $tax_name; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
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
      </div>
      <div class="l-sidebar">
        <?php get_sidebar('sidebar'); ?>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>