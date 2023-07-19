<?php get_header(); ?>
    <main>
        <div class="l-visualPage">
            <div class="container-wd">
                <div class="l-visualPage--main">
                    <div class="l-visualPage--tlt">
                        <p class="_en">ABOUT</p>
                        <h2 class="_ja">ストラーダについて</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news-archive pdt50">
                <div class="section-main">
                    <div class="page-tlt">
                        <p class="page-tlt--sub">
                            NEWS
                        </p>
                        <h1 class="page-tlt--txt">最新情報</h1>
                    </div>
                    <div class="c-news pt50">
                        <?php
                            query_posts(array('post_type' =>'news', 'posts_per_page' => 10,'orderby' => 'date', 'paged' => get_query_var('paged')) );
                            // the query
                            if (have_posts()) :
                                while (have_posts()) : the_post(); ?>
                                    <div class="_items">
                                        <time><?php the_date('Y.m.d')?></time>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                <?php
                                endwhile;
                                if (function_exists("pagination")) {
                                    pagination($additional_loop->max_num_pages);
                                }
                                wp_reset_query();
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="c-content--link pdt50">
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
    </main>
<?php get_footer(); ?>
