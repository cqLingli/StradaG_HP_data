

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
    <!-- end c-breakcrumds -->
    <div class="l-container">
        <div class="c-mainTitle template-service-mainTitle">
            <div class="c-mainTitle_content">
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">
                        事業内容
                        <span>Service</span>
                    </h1>
                </div>
            </div>
        </div>

        <div class="template-service-title">
            <hr class="service-line-bottom-top" />
            <span class="service-line-bottom2-span">労務に関するトータルサポート</span>
            <p>人事、労務、社会保険、労働保険に関するご相談や事務手続きをおこないます。</p>
            <p>日本人・外国人採用から雇用に関する手続き、就業規則作成まで労務の専門家としてしっかりサポートさせていただきます。</p>
            <hr class="service-line-bottom-top2" />
            <div style="margin-top: 3%;"></div>
        </div>
    </div>
    <!-- end c-mainTitle -->
       <div class="c-new-content-service">
        <div class="l-content template-sz-service">
            <div class="c-serviceList1">
                <div class="menberTtile">代表的なサービス</div>
                <div style="height: 10px;"></div>
                <?php
                $index=0;
                $args = array(
                    'post_type' => 'servicesr', // 文章类型
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'taxonomy_servicesr' => 'representative_service'

                );
                $query = new WP_Query( $args ); // 执行查询
                ?>
                <?php while (  $query->have_posts() ) : $query->the_post(); $index++;?>
                    <div class="<?php
                    if($index%3==1){
                        echo "serviceItem_top";
                    }else{
                        echo "serviceItem_top2";
                    }
                    ?>">
                        <div class="thumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>

                        <a  href="<?php echo get_permalink(get_the_ID()); ?>" style="text-decoration:none;">
                            <div class="service_title_icon">
                                <span>  <?php echo get_the_title(); ?></span>
                            </div>
                        </a>
                        <div class="content">
                            <div>
                                <p class="description_box"><?php echo nl2br(get_the_excerpt()); ?></p>
                            </div>

                        </div>

                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

        <div class="l-content template-sz-service">

            <div class="c-serviceList1">
                <div class="menberTtile">社労士業務とは</div>
                <div style="height: 10px;"></div>

            </div>
        </div>

       <div class="c-new-content-service">
        <div class="l-content template-sz-service">
            <div class="c-serviceList1">
                <div class="menberTtile">当社の強み</div>
                <div style="height: 10px;"></div>
                <?php
                $index=0;
                $args = array(
                    'post_type' => 'servicesr', // 文章类型
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'taxonomy_servicesr' => 'trengths_company'

                );
                $query = new WP_Query( $args ); // 执行查询
                ?>
                <?php while (  $query->have_posts() ) : $query->the_post(); $index++;?>
                    <div class="<?php
                    if($index%3==1){
                        echo "serviceItem_top";
                    }else{
                        echo "serviceItem_top2";
                    }
                    ?>">
                        <div class="thumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>

                        <a  href="<?php echo get_permalink(get_the_ID()); ?>" style="text-decoration:none;">
                            <div class="service_title_icon">
                                <span>  <?php echo get_the_title(); ?></span>
                            </div>
                        </a>
                        <div class="content">
                            <div>
                                <p class="description_box"><?php echo nl2br(get_the_excerpt()); ?></p>
                            </div>

                        </div>

                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>

        <div class="l-content template-sz-service">
            <div class="c-serviceList1">
                <div class="menberTtile">コンテンツ</div>
                <div style="height: 10px;"></div>

            </div>
        </div>

</main>
