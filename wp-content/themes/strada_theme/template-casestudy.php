
    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-column">
        <!-- end c-breakcrumds -->
        <div class="l-container">
        <div class="firstview_casestudy template-casestudy">
            <div class="container">
                <p class="english">Case study</p>
                <h1 class="title">事例</h1>
            </div>
        </div>
        </div>
        <!-- end c-mainTitle -->
        <div class="c-new-content">
        <div class="l-container">
            <?php  $recommendPosts = array(); ?>
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
                'post_type' => 'casestudy',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'paged' => $paged,
                'meta_query' => array(
                    array(
                        'key'     => 'recommend',
                        'value'   => '"yes"',
                        'compare' => 'LIKE'
                    )
                )
            );

            $the_query = new WP_Query($args);
            ?>
            <?php if(is_page('columns') && ($the_query->found_posts != 0)) : ?>
            <?php endif; ?>
            <div class="p-column__02">
                <div class="p-column__main" style="width: 100%">
                    <div class="menberTtile">
                        <span>当社事例</span>
                    </div>
                    <div class="p-column__list1" >
                        <?php
                        $index=0;
                        query_posts(array('post_type' =>'casestudy', 'posts_per_page' => 30,'orderby' => 'date', 'paged' => get_query_var('paged'), 'post__not_in' => $recommendPosts) );
                        if(have_posts()) :
                            while(have_posts()) : the_post(); $index++;?>
                                <div class="<?php
                                if($index%3==1){
                                    echo " serviceItem_top"; }else{ echo "serviceItem_top2" ; } ?>">
                                    <div class="thumb">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </div>

                                    <div class="content">
                                        <div>
                                            <p class="description_box">
                                                <?php echo nl2br(get_the_excerpt()); ?>
                                            </p>
                                        </div>

                                    </div>
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>" style="text-decoration:none;">
                                        <div class="columns_title_icon">
                                            <span style="color: black">READ MORE</span>
                                        </div>
                                    </a>

                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        else:
                            ?>
                           <!-- <div class="title"><p><?php /*esc_html_e( 'Sorry, no posts matched your criteria.' ); */?></p></div>-->
                        <?php
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </main>

