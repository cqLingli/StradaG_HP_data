<?php
session_start();
$url_type = $_SESSION['url_type'];
get_header("sg");
global $wp_query;
?>

<?php
$qo = get_queried_object();
$mv = get_field('service_cat_mv', $qo);
?>
    <style>
        .p-service .c-mainTitle{
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .p-service .c-mainTitle.c-mainTitle-<?php echo $qo->slug; ?>{
            background-image:url(<?php echo $mv['url']; ?>);
        }

    </style>
    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-service">

        <div class="c-breakcrumds">
            <div class="l-container">
                <?php get_template_part('breadcrumb', 'all'); ?>
            </div>
        </div>
        <!-- end c-breakcrumds -->
        <div class="c-mainTitle c-mainTitle-<?php echo $qo->slug; ?> c-mainTitle-overlay">
            <div class="c-mainTitle_content content-service">
                <div class="c-tlt01 c-tlt01__black title-color">
                    <h1 class="c-tlt01__line c-tlt01__line--gray title-color">
                        <?php
                        if('visa' != $wp_query->query['taxonomy_servicesg']){
                            echo single_term_title();
                        }
                       ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="l-container">
        <div class="term-description term-description—service">
            <hr class="c-line-bottom1" />
            <?php echo term_description(); ?>
            <hr class="c-line-bottom2" />
        </div>
        </div>
        <!-- end c-mainTitle -->
        <div class="c-new-content">
        <div class="l-container">
            <div class="l-content">
                <div class="c-serviceList c-serviceList-add">
                    <?php
                    $index=0;
                    $args = array();
                    if($company){
                        $args = array(
                            'company' => $company, // 自定义字段名
                            'taxonomy_servicesg' =>$wp_query->query['taxonomy_servicesg'],
                        );
                    }else{
                        $args = array(
                            'taxonomy_servicesg' =>$wp_query->query['taxonomy_servicesg'],
                        );
                    }

                    $query = new WP_Query( $args ); // 执行查询
                    ?>
                    <?php while (  $query->have_posts() ) : $query->the_post(); $index++; ?>
                        <?php
                        $repeater = get_field('s_repeat');
                        ?>
                        <div class="<?php
                        if($index%3==1){
                            echo "serviceItem";
                        }else{
                            echo "serviceItem2";
                        }
                        ?>">
                            <span class="ttl"><?php the_title(); ?></span>
                            <div class="thumb">
                                <?php
                                if($repeater != null){
                                    foreach($repeater as $repeat){
                                        if($repeat['s_repeat_taxonomy'] == $qo->slug){
                                            $active = 1;
                                        }
                                    }
                                }
                                if($repeater != null && $active){
                                    ?>
                                    <img src="<?php echo $repeat['s_repeat_img']['url']; ?>" alt="nophoto">
                                    <?php
                                }else{
                                    if (has_post_thumbnail()) {
                                        echo get_the_post_thumbnail();
                                    } else { ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/images/common/no-image-sq.jpg" alt="nophoto">
                                    <?php }
                                }
                                ?>
                            </div>

                                <div>
                                    <p><?php echo nl2br(get_the_excerpt()); ?></p>
                                </div>
                                <div class="ttl2 c-btn01__blue">
                                    <a href="<?php echo get_the_permalink() ?>">詳細はこちら</a>
                                </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="entry-content page-entry2 menberTtile"> <a href="<?php echo str_replace("service", "admin/adminservicelist/", get_post_type_archive_link("service"));?>" class="c-back-service-list">
                        サービス案内へ戻る
                        <span class="i-arrow">
                </span>
                    </a></div>
            </div>
        </div>
        </div>
    </main>

<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_footer($url_type);
}else{
    get_footer();
}
?>