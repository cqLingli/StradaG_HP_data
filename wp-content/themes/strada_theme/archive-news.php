<?php
/* Template Name: group news */
get_header();
session_start();
$_SESSION['url_type']="";
$_SESSION['page_type']="news";
?>

    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-new01">
        <div class="c-breakcrumds">
            <div class="l-container">
                <?php if (function_exists('bcn_display')) { bcn_display(); }?>
            </div>
        </div>
        <div class="c-mainTitle">
            <div class="c-mainTitle_content news_content_add">
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">
                        ニュース
                        <span>NEWS</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="c-new-content" style="padding-bottom: 120px;">
            <div class="l-container">
                <div style="height: 5px"></div>
                <div class="c-list-news">
                    <?php
                    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                    $args = array(
                        'post_type' => 'news', // 文章类型
                        'posts_per_page' => 10,
                        'paged' => $paged
                    );
                    $query = new WP_Query( $args ); // 执行查询
                    ?>
                    <?php while (  $query->have_posts() ) : $query->the_post(); ?>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="c-new">
                            <div class="c-new__date">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </div>
                            <div class="c-new__title">
                                <?php echo get_the_title(); ?>
                            </div>
                            <hr class="c-line-bottom" />
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php
                if (function_exists("pagination")) {

                    pagination($query->max_num_pages);
                }
                ?>
            </div>
        </div>
    </main>


<?php get_footer(); ?>