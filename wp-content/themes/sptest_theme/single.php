<?php
/**
 * Single page
 */

get_header(); ?>
    <main>
        <div id="breadcrumb">
            <div class="container">
                <?php breadcrumb(); ?>
            </div>
        </div>
        <div class="container">
            <div class="layout__col">
                <div class="layout__col__main" id="single_page">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="c-single">
                                        <h1 class="page-tlt--txt">
                                            <?php the_title(); ?>
                                        </h1>
										
										<div class="date">
											更新日：<?php the_modified_date('Y/n/j'); ?>
										</div>
										
										<?php 
											if( isset($post->post_author) ){
												$display_name = get_the_author_meta( 'display_name', $post->post_author );
												if ( empty( $display_name ) ) $display_name = get_the_author_meta( 'nickname', $post->post_author );
												
												$user_description = get_the_author_meta( 'user_description', $post->post_author );
												$user_website = get_the_author_meta('url', $post->post_author);
												$user_avatar = get_avatar( get_the_author_meta('user_email') , 90 );
												?>
												<div class="author-info">
													<div class="head">
														<div class="avatar">
															<?php echo $user_avatar; ?>
														</div>
														<div class="ttl">
															<div class="name">
																<?php echo $display_name; ?>
															</div>
														</div>
													</div>
													<div class="content">
														<p>
															<?php echo $user_description; ?>
														</p>
													</div>
												</div>
												<?php
											}
										?>
									
                                        <div class="c-single_content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </article>
                        <?php endwhile; ?>
                    <?php
                    else :
                    endif;
                    ?>
                    <ul class="pre-next">
                        <?php $prev_post = get_previous_post();
                        if (!empty( $prev_post )): ?>
                            <li class="pre-post fontello l-arrow c-post_hover">
                                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" data-prev="前の記事">
                                    <div class="image" style="display:none">
                                        <div class="thumb">
                                            <?php
                                        /*  if (has_post_thumbnail($prev_post->ID)) {
                                                echo get_the_post_thumbnail( $prev_post->ID,'kv-size' );
                                            } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png" alt="" class="img">
                                            <?php } */
                                            ?>
                                        </div>
                                    </div>
                                    <span class="textlimit textline__2">
                                        <?php
                                        $count_text = strlen(mb_substr(strip_tags($prev_post-> post_title),0));
                                        if($count_text > 60){
                                            echo mb_substr(strip_tags($prev_post-> post_title),0,60).'…';
                                        }
                                        else{
                                            echo mb_substr(strip_tags($prev_post-> post_title),0,60);
                                        }
                                        ?>
                                    </span>
                                </a>
                            </li>
                        <?php endif;
                        $next_post = get_next_post();
                        if (!empty( $next_post )): ?>
                            <li class="next-post fontello r-arrow">
                                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" data-next="次の記事">
                                    <span class="textlimit textline__2">
                                        <?php
                                        $count_text = strlen(mb_substr(strip_tags($next_post-> post_title),0));
                                        if($count_text > 60){
                                            echo mb_substr(strip_tags($next_post-> post_title),0,60).'…';
                                        }
                                        else{
                                            echo mb_substr(strip_tags($next_post-> post_title),0,60);
                                        }
                                        ?>
                                    </span>
                                    <div class="image" style="display:none">
                                        <div class="thumb">
                                            <?php
                                            /* if (has_post_thumbnail( $next_post->ID)) {
                                                echo get_the_post_thumbnail( $next_post->ID,'kv-size' );
                                            } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png" alt="" class="img">
                                            <?php } */
                                            ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="layout__col__sub">
                    <?php get_template_part('sidebar'); ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>