<?php
session_start();
get_header("sz");
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-column">
  <div class="c-breakcrumds">
    <div class="l-container">
            <?php get_template_part('breadcrumb', 'all'); ?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
    <div class="c-mainTitle">
        <div class="c-mainTitle_content single-column-info">
            <div class="c-tlt01 c-tlt01__black">
                <h1 class="c-tlt01__line c-tlt01__line--gray">
                    <?php
                        if($_SESSION["CAT_NAME"]){
                            echo $_SESSION["CAT_NAME"] ;
                        }else{
                            $category = get_the_category();
                            echo $category [0]->cat_name;
                        }
                    ?>
                    <span>column</span>
                </h1>
            </div>
        </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="c-new-content">
  <div class="l-container">
    <div class="p-column__03">
      <div class="p-column__post p-column__post1">
          <div class="menberTtile">
            <span><?php
                if($_SESSION["CAT_NAME"] ){
                    echo $_SESSION["CAT_NAME"] ;
                }else{
                    $category = get_the_category();
                    echo $category [0]->cat_name;
                }
                ?></span>
          </div>
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
                  $cat_name = $tax_name;
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
            <?php 
              if( isset($post->post_author) ){
                $display_name = get_the_author_meta( 'display_name', $post->post_author );
                if ( empty( $display_name ) ) $display_name = get_the_author_meta( 'nickname', $post->post_author );
                
                $user_description = get_the_author_meta( 'user_description', $post->post_author );
                $user_website = get_the_author_meta('url', $post->post_author);
                $user_avatar = get_avatar( get_the_author_meta('user_email') , 90 );
                ?>
                <!-- <div class="box__author">
                  <div class="image">
                    <?php echo $user_avatar; ?>
                  </div>
                  <div class="profile">
                    <div class="profile__name">
                      <span class="job">監修者</span>
                      <span class="name"><?php echo $display_name; ?></span>
                    </div>
                    <div class="content">
                      <?php echo $user_description; ?>
                    </div>
                  </div>
                </div> -->
                <?php
              }
            ?>

            <?php
            $main_user = get_user_by('id', intval($post->post_author));
            $member = get_field('member_display', 'user_'.$post->post_author);
            if($member){
                ?>
                <div class="c-member">
                    <div class="c-member_ttl">この記事の監修者</div>
                    <div class="c-member_main">
                        <div class="c-memberTop">
                            <div class="c-member_ava">
                                <?php
                                if ( has_post_thumbnail($member->ID) ) {
                                    echo get_the_post_thumbnail($member->ID, 'full');
                                } else {
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="<?php the_title(); ?>">
                                <?php } ?>
                            </div>
                            <div class="head">
                                <div class="name"><?php echo get_the_title($member->ID); ?></div>
                                <div class="job-list">
                                    <?php
                                    $terms = wp_get_post_terms($member->ID,'taxonomy_position', array(
                                        'hide_empty' => false,
                                        'parent' => 0,
                                        'order' => 'ASC',
                                        'orderby' => 'term_id'
                                    ) );
                                    foreach ( $terms as $term) {
                                        $tax_link = get_term_link($term->slug, 'taxonomy_position');
                                        $tax_name = $term->name;
                                        $tax_slug = $term->slug;
                                        echo '<span class="job">' . $tax_name . '</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="bio">
                            <?php echo get_user_meta($main_user->ID, 'description', true); ?>
                        </div>
                        <a href="<?php echo get_permalink($member->ID); ?>" class="c-btn">この監修者のプロフィールを見る
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.318" height="14.558" viewBox="0 0 20.318 14.558">
                                <path id="Path_8806" data-name="Path 8806" d="M552.563,148.306a1.437,1.437,0,0,0-1.854,0,1.064,1.064,0,0,0,0,1.637l4.693,4.145H541.414a1.167,1.167,0,1,0,0,2.315H555.4l-4.693,4.145a1.064,1.064,0,0,0,0,1.637,1.436,1.436,0,0,0,1.854,0l7.858-6.94Z" transform="translate(-540.103 -147.968)"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>


        <div class="p-column__slider">
          <div class="p-column__list">
            <?php $prev_post = get_previous_post();
            if (!empty( $prev_post )): ?>
              <div class="item prev">
                <div class="image">
                  <figure>
                    <?php
                      if (has_post_thumbnail($prev_post->ID)) {
                        echo get_the_post_thumbnail( $prev_post->ID,'kv-size' );
                      } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/column/img01.jpg" alt="" />
                      <?php }
                      ?>
                  </figure>
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
                <div class="slick-prev">
                </div>
                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" data-prev="前の記事" class="preArrow"></a>
              </div>
            <?php endif;
            $next_post = get_next_post();
            if (!empty( $next_post )): ?>
              <div class="item next">
                <div class="image">
                  <figure>
                     <?php
                      if (has_post_thumbnail( $next_post->ID)) {
                        echo get_the_post_thumbnail( $next_post->ID,'kv-size' );
                      } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="" class="img">
                      <?php }
                    ?>
                  </figure>
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
                <div class="slick-next">
                </div>
                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" data-next="次の記事" class="nextArrow"></a>
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
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'orderby' => 'date',
                  'category__in' => $category_ID,
                  'paged' => $paged,
                  'post__not_in' => array(get_the_id())
              );

              $the_query = new WP_Query($args);
              if($the_query->have_posts()) :
                  while($the_query->have_posts()) : $the_query->the_post(); ?>
                      <div class="item">
                        <div class="image">
                          <?php
                            if ( has_post_thumbnail() ) {
                              the_post_thumbnail( 'kv-size');
                            } else {
                          ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="<?php the_title(); ?>">
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
                        </div>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
                      </div>
                  <?php endwhile;
                  wp_reset_postdata();
              else:
                  ?>
                  <div class="title u-mb-8"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
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
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'meta_key' => '_views',
                  'order' => 'desc', 
                  'orderby' => 'meta_value_num',
                  'posts_per_page' => 3,
                  'paged' => $paged,
              );

              $the_query = new WP_Query($args);
              if($the_query->have_posts()) :
                  while($the_query->have_posts()) : $the_query->the_post(); ?>
                      <div class="item">
                        <div class="image">
                          <?php
                            if ( has_post_thumbnail() ) {
                              the_post_thumbnail( 'kv-size');
                            } else {
                          ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="<?php the_title(); ?>">
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
                        </div>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
                      </div>
                  <?php endwhile;
                  wp_reset_postdata();
              else:
                  ?>
                  <div class="title u-mb-8"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
                  <?php
              endif;
            ?>
          </div>
        </div>
        <div class="p-column__related-Article" style="display:none">
          <p class="c-title">この記事を見た人はこんな記事も見ています</p>
          <div class="p-column__list">
            <?php
              $tags = wp_get_post_tags(get_the_ID());
              $tag_ids = array();
              foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                  'post_type' => 'post',
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
                        <?php
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'kv-size');
                          } else {
                        ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="<?php the_title(); ?>">
                        <?php } ?>
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
      </div>
      <div class="l-sidebar column_sidebar02" >
        <?php
        //session_start();
        $url_type = $_SESSION['url_type'];
        if($url_type){
            get_sidebar($_SESSION['url_type']);
        }else{
            get_sidebar('sidebar');
        }

         ?>
      </div>
    </div>
  </div>
    </div>
</main>


<?php
    get_footer("sz");
?>
