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
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">
<!--                        --><?php //echo single_term_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="l-container">
        <div class="term-description">
            <hr class="c-line-bottom" />
            <?php echo term_description(); ?>
            <hr class="c-line-bottom" />
        </div>
        </div>
        <!-- end c-mainTitle -->
        <div class="c-new-content">
        <div class="l-container">
            <div class="l-content">
                <div class="c-serviceList1">
                    <?php
                    global $wp_query;
                    $args = array(
//                        'company' => $company, // 自定义字段名
                        'taxonomy_service' =>$wp_query->query['taxonomy_service'],
                    );
                    $query = new WP_Query( $args ); // 执行查询
                    ?>
                    <?php while (  $query->have_posts() ) : $query->the_post(); ?>
                        <?php
                        $repeater = get_field('s_repeat');
                        ?>
                        <div class="serviceItem">
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
                            <div class="content">
                                <div style="height: 200px;">
                                    <p><?php echo nl2br(get_the_excerpt()); ?></p>
                                </div>
                                <div class="ttl2 c-btn01__blue">
                                    <a href="<?php echo get_the_permalink() ?>">詳細はこちら</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
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