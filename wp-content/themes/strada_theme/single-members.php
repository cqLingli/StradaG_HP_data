<?php
session_start();
$company;
$url_type = $_SESSION['url_type'];
if($url_type){
    get_header($url_type);
}else{
    get_header();
}
if($url_type==="sz"){
    $company="SZ";
}elseif ($url_type==="sg"){
    $company="SG";
}elseif ($url_type==="sb"){
    $company="SB";
}elseif ($url_type==="ch"){
    $company="CH";
}elseif ($url_type==="tr"){
    $company="TR";
}elseif ($url_type==="ss"){
    $company="SS";
}
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-member02">
  <div class="c-breakcrumds">
    <div class="l-container">
        <?php get_template_part('breadcrumb', 'all'); ?>
    </div>
  </div>
    <!-- end c-breakcrumds -->
    <div class="c-mainTitle">
        <div class="c-mainTitle_content menber-single-content">
            <div class="c-tlt01 c-tlt01__black">
                <h1 class="c-tlt01__line c-tlt01__line--gray">
                    メンバー紹介
                    <span>MEMBER</span>
                </h1>
            </div>
        </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="c-new-content" style="padding-bottom: 20px;">
  <div class="l-container">
      <div style="height: 5px;"></div>
      <div class="menberTtile menber_single-width">
          <span>メンバー紹介</span>
      </div>
    <div class="p-member02__box single_p-member02__box">
      <div class="image">
        <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
          }
        ?>
      </div>
      <div class="txt">
        <div class="c-job">
          <?php

            if($url_type==="sz"){
                if($post->sz_yw){
                    echo '<p class="job">' . $post->sz_yw . '</p>';
                }
            }elseif ($url_type==="sg"){
               if($post->sg_yw) {
              echo '<p class="job">' . $post->sg_yw . '</p>';
              }
            }elseif ($url_type==="sb"){
               if($post->sb_yw) {
              echo '<p class="job">' . $post->sb_yw . '</p>';
               }
            }elseif ($url_type==="ch"){
               if($post->ch_yw) {
              echo '<p class="job">' . $post->ch_yw . '</p>';
             }
            }elseif ($url_type==="tr"){
               if($post->tr_yw) {
                   echo '<p class="job">' . $post->tr_yw . '</p>';
               }
            }elseif ($url_type==="ss"){
               if($post->sr_yw) {
                   echo '<p class="job">' . $post->sr_yw . '</p>';
               }
            }else{
               if($post->top_yw) {
              echo '<p class="job">' . $post->top_yw . '</p>';
              }
            }

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
    <div class="p-member__list_single">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
        if($company){
            $args = array(
                'post_type' => 'members',
                'company' => $company, // 自定义字段名
                'posts_per_page' => -1,
                'orderby' => 'date',
                'paged' => $paged,
                'post__not_in' => array($post->ID)
            );
        }else{
            $args = array(
                'post_type' => 'members',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'paged' => $paged,
                'post__not_in' => array($post->ID)
            );

        }


        $the_query = new WP_Query($args); ?>
        <?php
        $index_menber=0;
        if($the_query->have_posts()) :
          while($the_query->have_posts()) : $the_query->the_post();$index_menber++;?>
              <div class="<?php
              if($index_menber % 4==1){
                  echo "newItem";
              }else{
                  echo "newItem2";
              }
              ?>">
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
                      <?php
                      $representative_name="";
                      $tax_name_over="";
                      $terms = wp_get_post_terms($post->ID,'taxonomy_position', array(
                          'hide_empty' => false,
                          'parent' => 0,
                          'order' => 'ASC',
                          'orderby' => 'term_id'
                      ) );
                      $index=0;
                      foreach ( $terms as $term) {
                          $tax_link = get_term_link($term->slug, 'taxonomy_position');
                          $tax_name = $term->name;
                          $tax_slug = $term->slug;
                          if($tax_slug==="representative"){
                              $representative_name  =$tax_name;
                          }else{
                              if($index===0){
                                  //  echo '<p class="job">'.$tax_name.'</p>';
                                  $tax_name_over=$tax_name;
                              }else{
                                  //   echo '<p class="job">/'.$tax_name.'</p>';
                                  $tax_name_over=$tax_name_over.'/'.$tax_name;
                              }
                              $index++;
                          }
                      }
                      $url_type = $_SESSION['url_type'];
                                    if($url_type==="sz"){
                                        $representative_name = $post->sz_yw;
                                    }elseif ($url_type==="sg"){
                                        $representative_name = $post->sg_yw;
                                    }elseif ($url_type==="sb"){
                                        $representative_name = $post->sb_yw;
                                    }elseif ($url_type==="ch"){
                                        $representative_name = $post->ch_yw;
                                    }elseif ($url_type==="tr"){
                                        $representative_name = $post->tr_yw;
                                    }elseif ($url_type==="ss"){
                                        $representative_name = $post->sr_yw;
                                    }else{
                                        $representative_name = $post->top_yw;
                                    }
                      ?>
                      <p class="menber-representative" style="height: 20px;"><?php echo $representative_name; ?></p>
                      <p class="menber-name"><?php echo get_the_title(); ?></p>
                      <div class="c-job">
                          <p class="job"><?php echo $tax_name_over."　" ?></p>
                      </div>

                      <a  href="<?php echo get_permalink(get_the_ID());?>">
                          <div class="service_title_icon">
                              <span style="font-size: 1.5rem;font-weight: 400;">READ MORE</span>
                          </div>
                      </a>

                  </div>
              </div>

          <?php endwhile;
          if (function_exists("pagination")) {
            pagination($the_query->max_num_pages);
          }
          wp_reset_postdata();
        else:
          ?>
<!--          <div class="title"><p>--><?php //esc_html_e( 'Sorry, no posts matched your criteria.' ); ?><!--</p></div>-->

          <?php
        endif;
      ?>
    </div>
  </div>
    </div>
</main>


<?php session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_footer($url_type);
}else{
    get_footer();
}
?>
