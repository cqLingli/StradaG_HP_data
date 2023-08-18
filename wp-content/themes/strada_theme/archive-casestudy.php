<?php get_header("sb");
/**
 * Template Name: Archive Bs Casestudy
 */
session_start();
$_SESSION['url_type']="sb";
$_SESSION['page_type']="casestudy";
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
        <div class="firstview_casestudy">
            <div class="container">
                <p class="english">Case study</p>
                <h1 class="title">事例</h1>
            </div>
        </div>
        </div>
        <!-- end c-mainTitle -->
        <div class="c-new-content">
        <div class="l-container">
            <?php  $recommendPosts = array(); ?>
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
                'post_type' => 'casestudy',
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
            ?>
            <?php if(is_page('columns') && ($the_query->found_posts != 0)) : ?>

            <?php endif; ?>
            <div class="p-column__02">
                <div class="p-column__main">
                    <div class="menberTtile">
                        <span>当社事例</span>
                    </div>
                    <div class="p-column__list">
                        <?php
                        query_posts(array('post_type' =>'casestudy', 'posts_per_page' => 30,'orderby' => 'date', 'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts) );
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
                                            $terms = wp_get_post_terms($post->ID, 'casestudy_type', array(
                                                'hide_empty' => false,
                                                'parent' => 0,
                                                'order' => 'ASC',
                                                'orderby' => 'term_id'
                                            ) );
                                            foreach ( $terms as $term) {
                                                // $tax_link = get_term_link($term->slug, 'category');
                                                $tax_name = $term->name;
                                                // $tax_slug = $term->slug;
                                                echo '<span class="cat">'.$tax_name.'</span>';
                                            }
                                            ?>
                                            <span class="date"><?php echo get_the_date('Y.m.j'); ?></span>
                                        </p>
                                        <p class="title"><?php echo get_the_title(); ?></p>
                                        <div class="content line-clamp line-clamp--2">
                                            <?php echo strip_tags(get_the_excerpt()); ?>
                                        </div>
                                        <div class="column-read-more">
                                            <img src="<?php echo home_url('/wp-content/uploads/2023/07/2024072740511_icon.png'); ?>"">
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
                    <div class="c-pagenation">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
                <div class="l-sidebar">
                    <?php get_sidebar('sb'); ?>
                </div>
            </div>
        </div>
        </div>
    </main>


<?php get_footer("sb"); ?>