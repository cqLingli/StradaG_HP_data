<?php
session_start();
$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
if(strpos($HTTP_REFERER,'taxria')){
    get_header("tr");
    $_SESSION['url_type'] = "tr";
    $company='TR';

}
elseif(strpos($HTTP_REFERER,'sr')){
    get_header("ss");
    $_SESSION['url_type'] = "ss";
    $company='SS';
}
elseif(strpos($HTTP_REFERER,'chushoukigyouroudou')){
    get_header("ch");
    $_SESSION['url_type'] = "ch";
    $company='CH';
}
elseif(strpos($HTTP_REFERER,'admin')){
    get_header("sg");
    $_SESSION['url_type'] = "sg";
    $company='SG';
}
elseif(strpos($HTTP_REFERER,'bs')){
    get_header("sb");
    $_SESSION['url_type'] = "sb";
    $company='SB';
}
elseif(strpos($HTTP_REFERER,'sz')){
    get_header("sz");
    $_SESSION['url_type'] = "sz";
    $company='SZ';
}
else{
    get_header();

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
                <?php if (function_exists('bcn_display')) { bcn_display(); }?>
            </div>
        </div>
        <!-- end c-breakcrumds -->
        <div class="c-mainTitle c-mainTitle-<?php echo $qo->slug; ?> c-mainTitle-overlay">
            <div class="c-mainTitle_content">
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">
<!--                        --><?php //echo single_term_title(); ?>
                    </h1>
                </div>
            </div>
        </div>

        <!-- end c-mainTitle -->
        <div class="c-new-content">
        <div class="l-container">
            <div class="l-content">
                <div class="term-description">
                    <?php echo term_description(); ?>
                    <hr class="c-line-bottom" />
                </div>
                <div class="c-serviceList">
                    <?php
                    global $wp_query;
                    $args = array(
                        'company' => $company, // 自定义字段名
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