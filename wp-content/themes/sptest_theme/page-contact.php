<?php get_header(); ?>
    <main>
        <div class="l-visualPage">
            <div class="container-wd">
                <div class="l-visualPage--main">
                    <h1 class="l-visualPage--tlt">
                        <p class="_en">CONTACT</p>
                        <span class="_ja">ストラーダについて</span>
                    </h1>
                </div>
            </div>
            <div class="container c-breadcrumb_wr">
                <?php breadcrumb(); ?>
            </div>
        </div>
        <div class="container">
            <div class="l-contact pd50">
                <div class="_form">
                    <?php echo do_shortcode( '[mwform_formkey key="28"]' ); ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
