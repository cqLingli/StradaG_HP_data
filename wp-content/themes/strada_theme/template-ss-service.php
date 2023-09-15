<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
    <!-- end c-breakcrumds -->
    <div class="l-container">
        <div class="c-mainTitle template-service-mainTitle">
            <div class="c-mainTitle_content">
                <div class="c-tlt01 c-tlt01__black">
                    <h1 class="c-tlt01__line c-tlt01__line--gray">
                        業務内容
                        <span>Service</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="l-container">
        <div class="template-service-title">
            <hr class="service-line-bottom-top" />
            <span class="service-line-bottom2-span">労務に関するトータルサポート</span>
            <p>人事、労務、社会保険、労働保険に関するご相談や事務手続きをおこないます。</p>
            <p>日本人・外国人採用から雇用に関する手続き、就業規則作成まで労務の専門家としてしっかりサポートさせていただきます。</p>
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
                <p class="sr_service_gm">社労士業務とは</p>
                <div class="sr_service_gm_title">
                    <div class="sr_service_gm_num">1
                    </div>
                    <div class="sr_service_gm_modai">どのような資格なのか？</div>
                </div>
                <p class="sr_service_gm_naiyo">
                    労働関連法令や社会保障法令に基づく申請書・届出書・報告書・審査請求書・異議申立書等の書類作成代行等を行い、また企業を経営して行く上での労務管理や社会保険に関する相談・指導を行う事を職業とする為の資格で、企業の総務・労務・人事部のアウトソーシング機能を果たすことができます。
                </p>

                <div class="sr_service_gm_title">
                    <div class="sr_service_gm_num">2
                    </div>
                    <div class="sr_service_gm_modai">どのような業務を行うのか？</div>
                </div>
                <p class="sr_service_gm_naiyo">社会保険労務士が扱う法律は労働基準法をはじめとする『労働関係法規』、
                    国民年金・厚生年金・健康保険法をはじめとする『社会保険法規』その他私たち社会保険労務士が扱う法律は１００を超えます。また、大きく社労士は３つの業務を行うことができます。</p>

                <div class="shosai_content">
                    <p class="shosai_content_title"><span class="shosai_content_gm_start">１号業務</span><span
                            class="shosai_content_gm_end">[関係書類の作成業務]</span></p>
                    <p class="shosai_content_gm_naiyo">
                        ・行政官庁に提出する届出書、申請書、報告書、審査請求などの書類を作成する業務<br />・企業の就業規則、労働者名簿、各種労使協定、賃金台帳などの書類を作成する業務</p>

                    <p class="shosai_content_title"><span class="shosai_content_gm_start">２号業務</span><span
                            class="shosai_content_gm_end">[代理・代行業務]</span></p>
                    <p class="shosai_content_gm_naiyo">
                        ・１号業務で作成した申請書などを、社会保険労務士が事業主に代って行政官庁に提出する業務<br />・事業主に代って、行政官庁に対して陳述、要望、主張などを行なう業務</p>

                    <p class="shosai_content_title"><span class="shosai_content_gm_start">３号業務</span><span
                            class="shosai_content_gm_end">[相談・指導業務]</span></p>
                    <p class="shosai_content_gm_naiyo">
                        いわゆる労務コンサルティングといわれる業務で、人事や労務に関する相談や指導、アドバイスを行ないます。社会保険労務士の能力が一番発揮できるジャンルで、今後の社会保険労務士の業務の、大きな柱になってきます。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="c-new-content-service">
        <div class="l-container">
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
                <p class="sr_service_gm">コンテンツ</p>
                <div class="sr_service_imgcontent">
                    <div class="sr_service_img1">
                        <a href="<?php echo home_url('servicesr/setsuritsu-romu');?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/images/top_SS/労務トラブル_バナー.png"
                                alt="" /></a>
                    </div>
                    <div class="sr_service_img2">
                        <a href="<?php echo home_url('servicesr/itツール活用');?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/images/top_SS/クラウド活用_バナー.png"
                                alt="" /></a>
                    </div>
                    <div class="sr_service_img3">
                        <a href="<?php echo home_url('sr/srservice/あなたは障害年金');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SS/障害年金_バナー.png"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>