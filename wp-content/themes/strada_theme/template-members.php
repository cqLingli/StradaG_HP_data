
    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-member02" style="margin-top: 0px;">

        <!-- end c-mainTitle -->
        <div class="c-new-content" style="padding-bottom:2%">
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
                        'posts_per_page' => -1,
                          'orderby' => array(
                                'meta_value' => 'ASC'
                            ),
                        'meta_key' => 'top_jb',
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
                                        if($tax_name==="代表社員"){
                                            $representative_name  ="代表社員";
                                        }else{
                                            if($index===0){
                                                //  echo '<p class="job">'.$tax_name.'</p>';
                                                $tax_name_over=$tax_name;
                                            }else{
                                                //   echo '<p class="job">/'.$tax_name.'</p>';
                                                $tax_name_over=$tax_name_over.'/'.$tax_name;
                                            }
                                            $index++;
                                        }
                                    }

                                    $url_type = $_SESSION['url_type'];
                                    if($url_type==="sz"){
                                        $representative_name = $post->sz_yw;
                                    }elseif ($url_type==="sg"){
                                        $representative_name = $post->sg_yw;
                                    }elseif ($url_type==="sb"){
                                        $representative_name = $post->sb_yw;
                                    }elseif ($url_type==="ch"){
                                        $representative_name = $post->ch_yw;
                                    }elseif ($url_type==="tr"){
                                        $representative_name = $post->tr_yw;
                                    }elseif ($url_type==="ss"){
                                        $representative_name = $post->sr_yw;
                                    }else{
                                        $representative_name = $post->top_yw;
                                    }
                                    
                                    ?>
                                    <p class="menber-representative"><?php echo $representative_name; ?></p>
                                    <p class="menber-name"><?php echo get_the_title(); ?></p>
                                    <div class="c-job">
                                        <p class="job"><?php echo $tax_name_over."　" ?></p>
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
