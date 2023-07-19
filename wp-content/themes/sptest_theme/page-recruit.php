<?php get_header(); ?>
    <main>
        <div class="l-visualPage">
            <div class="container-wd">
                <div class="l-visualPage--main">
                    <h1 class="l-visualPage--tlt">
                        <p class="_en">RECRUIT</p>
                        <span class="_ja">採用情報</span>
                    </h1>
                </div>
            </div>
            <div class="container c-breadcrumb_wr">
                <?php breadcrumb(); ?>
            </div>
        </div>
        <div class="container">
            <div class="p-about--sec01 pdt50 page-recruit">
                <div class="section-main">
                    <div class="page-tlt">
                        <p class="page-tlt--sub">
                            RECRUIT
                        </p>
                        <h2 class="page-tlt--txt">採用情報</h2>
                    </div>
                    <div class="page-content">
                        <div class="btnList">
                            <a href="<?php echo home_url('/recruit/')?>tax" class="c-btn01">税理士法人</a>
                            <a href="<?php echo home_url('/recruit/')?>cpa" class="c-btn01">公認会計士事務所</a>
                            <a href="<?php echo home_url('/recruit/')?>sr" class="c-btn01">社会保険労務士法人</a>
                            <a href="<?php echo home_url('/recruit/')?>admin" class="c-btn01">行政書士事務所</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-about--sec02 pdt50">
                <div class="content-link">
                    <div class="_items">
                        <a href="">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                所属弁護士
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                所属弁護士
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                所属弁護士
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
