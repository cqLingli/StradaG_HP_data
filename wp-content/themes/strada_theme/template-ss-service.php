

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
    <!-- end c-breakcrumds -->
    <div class="l-container">
    <div class="c-mainTitle" style="  margin-left: 5.5%;margin-right: 5.5%;margin-top: -10%">
        <div class="c-mainTitle_content">
            <div class="c-tlt01 c-tlt01__black">
                <h1 class="c-tlt01__line c-tlt01__line--gray">
                    事業内容
                    <span>Service</span>
                </h1>
            </div>
        </div>
    </div>

    <div style="margin-left: 5.5%;margin-right: 5.5%;margin-top: 4%;font-size:1.5rem;">
        <hr class="service-line-bottom-top" />
        <p style="margin-top: 10px;">私たちは、企業が誕生して、軌道に乗り、成長していく姿を数多く見てきました。</p>
        <p>その中で、資金調達、補助金の取得、資本政策に基づく、会社のM&Aや上場等の企業の大きなライフイベントが発生します。</p>
        <p>そんな、会社のライフイベントで頼りになる存在であり続けたいと考えております。</p>
        <hr class="service-line-bottom-top2" />
        <div style="margin-top: 3%;"></div>
    </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="c-new-content">
        <div class="l-content">
            <div class="l-container">
                <?php
                $terms = get_terms( 'taxonomy_service', array(
                    'hide_empty' => false,
                    'parent' => 0,
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                ) );
                ?>
                <div class="c-serviceList">
                    <div class="menberTtile">事業内容</div>
                    <div style="height: 10px;"></div>
                    <?php
                    $index=0;
                    foreach ( $terms as $term ) :
                        $tax_link = get_term_link($term->slug, 'taxonomy_service');
                        $tax_name = $term->name;
                        $tax_slug = $term->slug;
                        $img = get_field('service_cat_thumbnail', $term);
                        $index++;
                        ?>
                        <div class="<?php
                        if($index%3==1){
                            echo "serviceItem_top";
                        }else{
                            echo "serviceItem_top2";
                        }
                        ?>">
                            <div class="thumb">
                                <img src="<?php echo $img['url'] ?>" alt="">
                            </div>

                                <a  href="<?php echo get_term_link($term) ?>">
                                    <div class="service_title_icon">
                                    <span><?php echo $tax_name; ?></span>
                                    </div>
                                </a>
                            <div class="content">
                                <div>
                                    <p class="description_box"><?php echo nl2br($term->description); ?></p>
                                    <!--              <div class="c-btn01 ">-->
                                </div>
                                <!--               <div class="ttl2 c-btn01__blue">-->
                                <!--                <a href="--><?php //echo get_term_link($term) ?><!--">詳細はこちら</a>-->
                                <!--              </div>-->
                            </div>

                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
