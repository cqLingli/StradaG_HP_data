
    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-member02">

        <!-- end c-mainTitle -->
        <div class="c-new-content" style="padding-bottom:2%">
            <div class="l-container">
                <div class="p-member__list" style="margin-left: 5.5%;margin-right: 5.5%">
                    <div class="menberTtile3">
                        <span>メンバー紹介</span>
                    </div>
                    <?php
                    $index_menber=0;
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                    $args = array(
                        'post_type' => 'members',
                        'company' => "SZ", // 自定义字段名
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'paged' => $paged
                    );

                    $the_query = new WP_Query($args); ?>
                    <?php
                    if($the_query->have_posts()) :
                        while($the_query->have_posts()) : $the_query->the_post();  $index_menber++;?>
                            <div class="<?php
                            if($index_menber % 4==1){
                                echo "newItem";
                            }else{
                                echo "newItem2";
                            }
                            ?>">
                                <div class="image">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('full');
                                    } else {
                                        ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="<?php the_title(); ?>">
                                    <?php } ?>
                                </div>
                                <div class="txt">
                                    <p class="name"><?php echo get_the_title(); ?></p>
                                    <div class="c-job">
                                        <?php
                                        $terms = wp_get_post_terms($post->ID,'taxonomy_position', array(
                                            'hide_empty' => false,
                                            'parent' => 0,
                                            'order' => 'ASC',
                                            'orderby' => 'term_id'
                                        ) );
                                        $index=0;
                                        foreach ( $terms as $term) {
                                            $tax_link = get_term_link($term->slug, 'taxonomy_position');
                                            $tax_name = $term->name;
                                            $tax_slug = $term->slug;
                                            if($index===0){
                                                echo '<p class="job">'.$tax_name.'</p>';
                                            }else{
                                                echo '<p class="job">/'.$tax_name.'</p>';
                                            }
                                            $index++;
                                        }
                                        ?>

                                    </div>
                                    <div class="read-more">
                                        <img src="<?php echo home_url('/wp-content/uploads/2023/07/2024072740511_icon.png'); ?>"">
                                    </div>

                                </div>
                                <a href="<?php echo get_permalink(get_the_ID()); ?>"></a>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </main>