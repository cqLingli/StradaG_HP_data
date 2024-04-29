<?php
/* Template Name: Archive TR Service */
get_header("tr");
session_start();
$_SESSION['url_type']="tr";
$_SESSION['page_type']="service";
?>

<!-- .l-main | メインコンテンツ -->
    <main class="l-main p-service">
        <div class="c-breakcrumds">
            <div class="l-container">
                <?php if (function_exists('bcn_display')) { bcn_display(); }?>
            </div>
        </div>
        <!-- end c-breakcrumds -->
        <div class="c-mainTitle service_1-mainTitle">
            <div class="c-mainTitle_content service_content_add">
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">

                    </h1>
                </div>
            </div>
        </div>

        <div class="l-container">
            <div class="service_title_01">
                <hr class="service-line-bottom1" />
                <span class="service-line-bottom2-span">未来につながるアドバイスを</span>
                <p>税理士法人や会計士と業務提携している不動産会社であり、「税金対策の為の不動産取引」「不動産取引の為の税金対策」を得意としています。</p>
                <p>相続等、節税などに絡む、お客様の不動産売買と税金対策を総合的にコンサルタントすることで、お客様満足度の最大化を目指します。</p>
                <hr class="service-line-bottom2" />
            </div>
        </div>

        <!-- end c-mainTitle -->
        <div class="c-new-content-service">
            <div class="l-container">
                <div class="l-content template-sz-service">
                    <div class="c-serviceList2">
                        <div class="menberTtile">代表的なサービス</div>
                        <div style="height: 10px;"></div>
                        <?php
                        $index=0;
                        $args = array(
                            'post_type' => 'servicetr', // 文章类型
                            'posts_per_page' => 10,
                            'paged' => $paged,
                            'taxonomy_servicetr' => 'representative_services'

                        );
                        $query = new WP_Query( $args ); // 执行查询
                        ?>
                        <?php while (  $query->have_posts() ) : $query->the_post(); $index++;?>
                            <div class="<?php
                            if($index%3==1){
                                echo " serviceItem_top"; }else{ echo "serviceItem_top2" ; } ?>">
                                <div class="thumb">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>

                                <a href="<?php echo get_permalink(get_the_ID()); ?>" style="text-decoration:none;">
                                    <div class="service_title_icon">
                            <span>
                                <?php echo get_the_title(); ?>
                            </span>
                                    </div>
                                </a>
                                <div class="content">
                                    <div>
                                        <p class="description_box">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>

                                </div>

                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="sr_service_bg">
            <div class="l-container">
                <div class="sr_service_style">
                    <p class="sr_service_gm2">弊社の強み</p>
                    <div style="height: 10px;"></div>
                    <?php
                    $index=0;
                    $args = array(
                        'post_type' => 'servicetr', // 文章类型
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'taxonomy_servicetr' => 'our_strength'

                    );
                    $query = new WP_Query( $args ); // 执行查询
                    ?>
                    <div class="classAdd">
                    <?php while (  $query->have_posts() ) : $query->the_post(); $index++;?>
                        <div class="<?php
                        if($index%3==1){
                            echo " serviceItem_top"; }else{ echo "serviceItem_top2" ; } ?>">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>

                            
                                <div class="service_title_icon"  style="background-image: url("");">
                            <span>
                                <?php echo get_the_title(); ?>
                            </span>
                                </div>
                            
                            <div class="content">
                                <div>
                                    <p class="description_box2">
                                        <?php echo nl2br(get_the_excerpt()); ?>
                                    </p>
                                </div>

                            </div>

                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer('tr'); ?>