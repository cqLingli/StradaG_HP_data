<?php
/**
 * Template name: Frontpage
 */
get_header(); ?>
<main>
    <section class="l-mv">
        <div class="container-wd">
            <div class="l-mv--main">
                <div class="l-mv--slide">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv.jpg">
                    </figure>
                </div>
                <div class="l-mv--tlt">
                    <p class="_en">
                        <span>見出しが入ります。見出しが入ります。</span>
                        <span>見出しが入ります。見出しが入ります。</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="l-news pd100">
        <div class="container">
            <div class="l-news--main">
                <div class="l-news--content">
                    <div class="l-news--tlt">
                        <h2>
                            <span>NEWS</span>
                            新着情報
                        </h2>
                    </div>
                    <div class="c-newsList">
                        <?php
                            query_posts(array('post_type' =>'news', 'posts_per_page' => 5,'orderby' => 'date', 'paged' => get_query_var('paged')) );
                            // the query
                            if (have_posts()) :
                                while (have_posts()) : the_post(); ?>
                                    <div class="_items sticky">
                                        <time><?php echo get_the_date('Y.m.d')?></time>
                                        <p>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </p>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_query();
                            endif;
                        ?>
                    </div>
                    <a href="<?php echo home_url('news'); ?>" class="c-link">新着情報一覧を見る >></a>
                </div>
            </div>
        </div>
    </section>
    <section class="l-vision pd100">
        <div class="container">
            <div class="l-vision--main">
                <div class="c-tltEn">
                    <h2>
                        <span>SELFPLUS</span>
                        'S VISION
                    </h2>
                </div>

                <div class="l-vision--txt">
                    <p>
                        見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。
                        見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。
                        見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。
                        見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。
                        見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。
                        見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。
                    </p>
                </div>

                <a href="<?php echo home_url('mission')?>" class="c-btn02">企業理念を見る</a>

                <div class="l-vision--video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uJ4AD3AMmmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="l-map pdt50">
        <div class="container">
            <div class="l-map--main">
                <div class="content-link">
                    <div class="_items">
                        <a href="<?php echo home_url('consultation'); ?>">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>CONSULTATION</span>
                                無料相談
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="<?php echo home_url('access'); ?>">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>ACCESS</span>
                               アクセス
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7326168381114!2d139.78441761561191!3d35.683585237449556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188945bc006151%3A0x7e7e6ad10bc42703!2z44K544OI44Op44O844OA56iO55CG5aOr5rOV5Lq6!5e0!3m2!1sja!2s!4v1592961856776!5m2!1sja!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="l-map--bot">
                 <div class="content-link">
                    <div class="_items">
                        <a href="<?php echo home_url('mission'); ?>/#greeting">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MESSAGE</span>
                                代表メッセージ
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="<?php echo home_url('member'); ?>">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                税理士・会計士紹介
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="<?php echo home_url('service'); ?>">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>SERVICE</span>
                                事業内容
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="l-line pdt50">
        <div class="container">
            <div class="section-main">
                <div class="l-line--main">
                    <div class="c-tltEn">
                        <h2>
                            <span>SELFPLUS</span>
                            'S LINE
                        </h2>
                    </div>
                    <div class="l-line--box">
                        <div class="l-line--inner">
                            <div class="c-tltJa">
                                <p>
                                    はじめよう、<br>
                                    LINEで弁護士に無料相談
                                </p>
                            </div>
                            <div class="l-line--txt">
                                <p>
                                    今すぐ弁護士に相談したいと思ったことはありませんか？<br>
                                    しかも、ご自宅から、スマートフォンを使って、簡単に。<br>
                                    ストラーダのLINE相談なら、いつでもどこからでも<br>
                                    弁護士に質問を送ることができます。
                                </p>
                            </div>
                            <div class="l-line--btn">
                                <a href="">
                                    MORE
                                </a>
                            </div>
                        </div>
                        <div class="l-line--img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line.png">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="l-corp">
        <div class="container">
            <div class="l-corp--main">
                <div class="l-corp--tlt">
                    <h2>
                        ストラーダ法律事務所の関連サイト
                    </h2>
                </div>
                <div class="l-corp--list">
                    <div class="_items">
                        <div class="_items-img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                        </div>
                        <div class="_items-inner">
                            <p>
                                セクハラ・パワハラ・職場のあらゆる悩みを改善するための<a href="">完全無料の労働組合「みんなのユニオン」</a>は、ストラーダ法律事務所が顧問を務める、入退会自由、手伝い義務なしの新しいユニオンです。
                            </p>
                        </div>
                    </div>
                    <div class="_items">
                        <div class="_items-img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                        </div>
                        <div class="_items-inner">
                            <p>
                                セクハラ・パワハラ・職場のあらゆる悩みを改善するための<a href="">完全無料の労働組合「みんなのユニオン」</a>は、ストラーダ法律事務所が顧問を務める、入退会自由、手伝い義務なしの新しいユニオンです。
                            </p>
                        </div>
                    </div>
                    <div class="_items">
                        <div class="_items-img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                        </div>
                        <div class="_items-inner">
                            <p>
                                セクハラ・パワハラ・職場のあらゆる悩みを改善するための<a href="">完全無料の労働組合「みんなのユニオン」</a>は、ストラーダ法律事務所が顧問を務める、入退会自由、手伝い義務なしの新しいユニオンです。
                            </p>
                        </div>
                    </div>
                    <div class="_items">
                        <div class="_items-img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                        </div>
                        <div class="_items-inner">
                            <p>
                                セクハラ・パワハラ・職場のあらゆる悩みを改善するための<a href="">完全無料の労働組合「みんなのユニオン」</a>は、ストラーダ法律事務所が顧問を務める、入退会自由、手伝い義務なしの新しいユニオンです。
                            </p>
                        </div>
                    </div>
                    <div class="_items">
                        <div class="_items-img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                        </div>
                        <div class="_items-inner">
                            <p>
                                セクハラ・パワハラ・職場のあらゆる悩みを改善するための<a href="">完全無料の労働組合「みんなのユニオン」</a>は、ストラーダ法律事務所が顧問を務める、入退会自由、手伝い義務なしの新しいユニオンです。
                            </p>
                        </div>
                    </div>
                    <div class="_items">
                        <div class="_items-img">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                        </div>
                        <div class="_items-inner">
                            <p>
                                セクハラ・パワハラ・職場のあらゆる悩みを改善するための<a href="">完全無料の労働組合「みんなのユニオン」</a>は、ストラーダ法律事務所が顧問を務める、入退会自由、手伝い義務なしの新しいユニオンです。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="l-youtube">
        <div class="container">
            <div class="youtube-wr">
                <div class="youtube">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DJO2XNFjrj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="youtube">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aZwIS0iVbpk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="youtube">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nSWXanXrpVs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>