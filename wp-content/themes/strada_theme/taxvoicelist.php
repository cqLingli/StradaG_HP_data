<?php
/* Template Name: sz_voicelist*/
get_header("sz");
session_start();
$_SESSION['url_type']="sz";
$_SESSION['page_type']="voice";
?>
 <!-- .l-main | メインコンテンツ -->
  <main class="l-main p-voice01">
    <div class="c-breakcrumds">
      <div class="l-container">
        <?php if (function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>
    <!-- end c-breakcrumds -->
    <div class="c-mainTitle Voicestyle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
            お客様の声
            <span>VOICE</span>
          </h1>
        </div>
      </div>
    </div>
    <!-- end c-mainTitle -->
     <div class="archiveVoice01">
     <div class="l-container">
       <?php 
       $field = get_field('voice_textbox', 3726);
       if($field){
         ?>
          <div class="voice-textBox">
            <p><?php echo $field; ?></p>
          </div>
         <?php
       }
       ?>
       <div class="archiveVoice-main">
          <div class="c-voicePost">
              
              
            <?php
              // $author_name = get_post_meta($post->ID, 'author_name', true);
              // $authorCurrent = array( get_user_by( 'id', $post->post_author ) );
              //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                'post_type' => 'voice',
                'company'=>'sz',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'paged' => $paged
              );

              $the_query = new WP_Query($args); ?>
              
              
            <?php
              if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                
                      <div class="c-voicePost__items">
                        <a href="<?php echo get_permalink(get_the_ID()); ?>">
                          <div class="c-voicePost__img">
                            <figure>
                              <?php
        						if (has_post_thumbnail()) {
        							echo get_the_post_thumbnail();
        						} else { ?>
        						<img src="<?php echo get_template_directory_uri() ?>/images/common/no-image.png" alt="nophoto">
        						<?php }
        						?>
        					  </figure>
                          </div>
                          <h3 class="c-voicePost__tlt">
                            <?php echo get_the_title(); ?>
                          </h3>
                          <p class="c-voicePost__name">
                            <?php echo get_field('name'); ?>
                          </p>
                          <p class="c-voicePost__text">
                          いつもありがとうございます！！
                          </p>
                        </a>
                      </div>
            <?php endwhile; ?>
            <?php endif; ?>

          </div>
		   	<?php
		   if (function_exists("pagination")) {
			   pagination($the_query->max_num_pages);
		   }
		   ?>
       </div>
     </div>
    </div>
  </main>
<?php get_footer(); ?>