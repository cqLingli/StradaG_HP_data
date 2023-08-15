<?php
/* Template Name: Archive Sz Service */
get_header("ss");
session_start();
$_SESSION['url_type']="ss";
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
                        業務内容
                        <span>Service</span>
                    </h1>
                </div>
            </div>
        </div>

        <div class="service_title_01">
            <hr class="service-line-bottom2" />
            <span class="service-line-bottom2-span">労務に関するトータルサポート</span>
            <p>人事、労務、社会保険、労働保険に関するご相談や事務手続きをおこないます。</p>
            <p>日本人・外国人採用から雇用に関する手続き、就業規則作成まで労務の専門家としてしっかりサポートさせていただきます。</p>
            <hr class="service-line-bottom2" />
        </div>

        <!-- end c-mainTitle -->
        <div class="c-new-content">
            <div class="l-content">
                <div class="l-container">
                    <div class="c-serviceList">
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
        </div>
        <div class="l-content template-sz-service">

            <div class="c-serviceList1">
                <div class="menberTtile">社労士業務とは</div>
                <div style="height: 10px;"></div>

            </div>
        </div>
        <div class="c-new-content">
        <div class="l-content">
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
        </div>
        <div class="l-content">
            <div class="c-serviceList1">
                <div class="menberTtile">コンテンツ</div>
                <div style="height: 10px;"></div>

            </div>
        </div>
    </main>

<?php get_footer('ss'); ?>