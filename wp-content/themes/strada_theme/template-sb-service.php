<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
    <!-- end c-breakcrumds -->
    <div class="l-container">
        <div class="c-mainTitle template-service-mainTitle">
            <div class="c-mainTitle_content">
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">
                    </h1>
                </div>
            </div>
        </div>
        <div class="l-container">
        <div class="template-service-title">
            <hr class="service-line-bottom-top" />
            <p>私たちは、企業が誕生して、軌道に乗り、成長していく姿を数多く見てきました。</p>
            <p>その中で、資金調達、補助金の取得、資本政策に基づく、会社のM&Aや上場等の企業の大きなライフイベントが発生します。</p>
            <p>そんな、会社のライフイベントで頼りになる存在であり続けたいと考えております。</p>
            <hr class="service-line-bottom-top2" />
            <div style="margin-top: 3%;"></div>
        </div>
        </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="c-new-content-service">
        <div class="l-container">
            <div class="l-content template-sz-service">
                <div class="c-serviceList1">
                    <div class="menberTtile">ビジネスの土台を作る</div>
                    <div style="height: 10px;"></div>
                    <?php
                    $index=0;
                    $args = array(
                        'post_type' => 'servicesb', // 文章类型
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'taxonomy_servicesb' => 'business_foundation'

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

    <div class="sr_service_bg">
        <div class="l-container">
            <div class="sr_service_style">
                <div class="menberTtile2">ビジネスを拡大する</div>
                <div style="height: 10px;"></div>
                <?php
                $index=0;
                $args = array(
                    'post_type' => 'servicesb', // 文章类型
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'taxonomy_servicesb' => 'business_expand'

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
                                    <?php echo nl2br(get_the_excerpt()); ?>
                                </p>
                            </div>

                        </div>

                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="c-new-content-service">
        <div class="l-container">
            <div class="l-content template-sz-service">
                <div class="c-serviceList1">
                    <div class="menberTtile2">会社を売買する</div>
                    <div style="height: 10px;"></div>
                    <?php
                    $index=0;
                    $args = array(
                        'post_type' => 'servicesb', // 文章类型
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'taxonomy_servicesb' => 'trade_company'

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

    <div class="sr_service_bg">
        <div class="l-container">
            <div class="sr_service_style">
                <div class="menberTtile2">会社を上場する</div>
                <div style="height: 10px;"></div>
                <?php
                $index=0;
                $args = array(
                    'post_type' => 'servicesb', // 文章类型
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'taxonomy_servicesb' => 'listing_company'

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
                                    <?php echo nl2br(get_the_excerpt()); ?>
                                </p>
                            </div>

                        </div>

                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</main>