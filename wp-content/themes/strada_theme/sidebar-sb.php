

        	 <div class="l-commonCategories">
                 <p class="c-tlt04">カテゴリー</p>
        	      <ul class="c-list__cat">
                      <?php
                      $args = array(
                           'taxonomy' => 'casestudy_type'
                      );

                      $categories = get_terms( $args );


                      foreach ($categories as $term) {
                          ?>
                  <li><a href="<?php echo home_url('casestudy').'/casestudy_type/'.$term->slug; ?>"><?php echo $term->name; ?> (<?php echo $term->count; ?>)</a></li>
                      <?php }
                      ?>
              </ul>

        </div>
	<div class="l-commonPopular-Article"><p class="c-tlt04">人気記事</p>
        <?php
		// query_posts(array('post_type' => $instance['casestudy'], 'post_status' => 'publish' ,'meta_key' => '_views','order' => 'desc', 'orderby' => 'meta_value_num','posts_per_page' => $instance['number'], 'paged' => get_query_var('paged')) );
        ?>
        <div class="p-column__list">
            <?php
            global $wp_query;
            $tags = wp_get_post_tags(get_the_ID());
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
                'post_type' => 'casestudy',
                'posts_per_page' => 3,
                'tag__in' => $tag_ids,
                'post__not_in' => array($post->ID),
                'orderby' => 'date',
                'paged' => $paged
            );

            $the_query = new WP_Query($args);
            if ( $the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();?>
            <div class="item">
              <div class="image">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('kv-size');
                        } else {
                    ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="" />
                    <?php } ?>
              </div>
              <div class="txt">
                <div class="content">
                  <?php the_title(); ?>
                </div>
                <p class="date-cat">
                  <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                </p>
              </div>
              <a href="<?php the_permalink(); ?>"></a>
            </div>

            <?php endwhile;
            wp_reset_query();
        endif;
        echo '</div>';
        echo $args['after_widget'];
        echo '</div>';
        ?>
	</div>
</div>



