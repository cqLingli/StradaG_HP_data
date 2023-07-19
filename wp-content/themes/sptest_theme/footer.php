    <footer id="footer" class="l-footer">
        <div class="l-footer--main">
            <div class="container">
                <div class="l-footer01">
                    <div class="f-logo">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                        </a>
                    </div>
                    <div class="f-gnav">
                        <?php
                            $i = 0;
                            $pages_id = [36, 38, 34, 40, 42, 47];
                            while($i < sizeof($pages_id)){
                                ?>
                                <div class="f-gnav--items">
                                    <a class="parent" href="<?php echo get_post_permalink($pages_id[$i]); ?>">
                                    <?php 
                                        switch($i) {
                                            case 0;
                                                echo "私たちの使命";
                                            break;
                                            case 1;
                                                echo "税理士・会計士紹介";
                                            break;
                                            case 2;
                                                echo "事業内容";
                                            break;
                                            case 3;
                                                echo "会社概要";
                                            break;
                                            case 4;
                                                echo "採用情報";
                                            break;
                                            case 5;
                                                echo "無料相談";
                                            break;
                                        }
                                    ?>
                                    </a>

                                    <?php 
                                    $args = array(
                                        'post_type'      => 'page',
                                        'posts_per_page' => -1,
                                        'post_parent'    => $pages_id[$i],
                                        'order'          => 'ASC',
                                        'orderby'        => 'menu_order'
                                    );

                                    $the_query = new WP_Query($args);
                                    if($the_query->have_posts()) {
                                        ?>
                                        <ul>
                                        <?php
                                        while($the_query->have_posts()) : $the_query->the_post();
                                            ?>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>

                                            <?php
                                        endwhile;
                                        ?>
                                        </ul>
                                        <?php
                                    }

                                    wp_reset_postdata();

                                    ?>
                                </div>
                                <?php
                                $i++;
                            }

                        ?>
                    </div>
                </div>
                <div class="f-menu">
                    <ul>
                        <li>
                            <a href="">見出しが入ります。</a>
                        </li>
                        <li>
                            <a href="">見出しが入ります。</a>
                        </li>
                        <li>
                            <a href="">見出しが入ります。</a>
                        </li>
                        <li>
                            <a href="">見出しが入ります。</a>
                        </li>
                        <li>
                            <a href="">見出しが入ります。</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="f-copyright">
                見出しが入ります。見出しが入ります。
            </p>
        </div>
    </footer>
    </div><!-- /wrapper -->
    <?php wp_footer(); ?>
</body>
</html>