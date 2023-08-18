
    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-member02" style="margin-top: 0px;">

        <!-- end c-mainTitle -->

        <div class="c-new-content c-new-content_style">
            <div class="l-container">
                <div class="p-member__list tempalte_menber-list p-member__list_extra">
                    <div class="menberTtile3">
                        <span>メンバー紹介</span>
                    </div>
                    <?php
                    $index_menber=0;
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                    $args = array(
                        'post_type' => 'members',
                        'company' => "SB", // 自定义字段名
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
                                    <?php
                                    $representative_name="";
                                    $tax_name_over="";
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
                                        if($tax_slug==="representative"){
                                            $representative_name  =$tax_name;
                                        }else{
                                            if($index===0){
                                                $tax_name_over=$tax_name;
                                            }else{
                                                $tax_name_over=$tax_name_over.'/'.$tax_name;
                                            }
                                            $index++;
                                        }

                                    }
                                    ?>
                                    <p class="menber-representative"><?php echo $representative_name; ?></p>
                                    <p class="menber-name"><?php echo get_the_title(); ?></p>
                                    <div class="c-job">
                                        <p class="job"><?php echo $tax_name_over ?></p>
                                    </div>

                                    <a  href="<?php echo get_permalink(get_the_ID());?>">
                                        <div class="service_title_icon">
                                            <span style="font-weight: 400!important;">READ MORE</span>
                                        </div>
                                    </a>

                                </div>
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