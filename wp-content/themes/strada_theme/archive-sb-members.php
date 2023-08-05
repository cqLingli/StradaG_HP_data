<?php
/* Template Name: Archive SB Members */
get_header('sb');
session_start();
$_SESSION['url_type']="sb";
$_SESSION['page_type']="members";

?>
    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-member02">
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
                <!--                    <li><a href="--><?php ////echo get_post_type_archive_link('members'); ?><!--">ALL</a></li>-->
                <div class="menberTtile2">
                    <span>メンバー紹介</span>
                </div>

            </ul>
            <div class="p-member__list">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                $args = array(
                    'post_type' => 'members',
                    'company' => "SB", // 自定义字段名
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'paged' => $paged
                );

                $the_query = new WP_Query($args); ?>
                <?php
                if($the_query->have_posts()) :
                    while($the_query->have_posts()) : $the_query->the_post();?>
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
                                <p class="name"><?php echo get_the_title(); ?></p>
                                <div class="c-job">
                                    <?php
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
                                        if($index===0){
                                            echo '<p class="job">'.$tax_name.'</p>';
                                        }else{
                                            echo '<p class="job">/'.$tax_name.'</p>';
                                        }
                                        $index++;
                                    }
                                    ?>

                                </div>
                                <div class="read-more">
                                    <img src="<?php echo home_url('/wp-content/uploads/2023/07/2024072740511_icon.png'); ?>"">
                                </div>

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
            </div>
        </div>
    </main>
<?php get_footer("sb"); ?>