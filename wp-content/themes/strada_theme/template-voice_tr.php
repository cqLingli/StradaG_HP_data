<!-- .l-main | メインコンテンツ -->
<main class="p-voice">
  <div class="l-container">
    <div class="c-mainTitle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
            お客様の声
            <span>VOICE</span>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
    <div class="qa_container">
  <div class="archiveVoice">
    <div class="l-container">
      <?php
       $field = get_field('voice_textbox', 3726);
       if($field){
         ?>
      <div class="voice-textBox">
        <p>
          <?php echo $field; ?>
        </p>
      </div>
      <?php
       }
       ?>
      <div class="archiveVoice-main">


        <div class="c-voicePost">

            <div class="c-qa-list__title">
                <p>Aさん（会社員）</p>
            </div>


            <div class="c-qa-list__title">
                <p>Bさん（医者））</p>
            </div>

            <div class="c-qa-list__title">
                <p>Cさん（弁護士）</p>
            </div>


            <div class="c-qa-list__title">
                <p>その他の声</p>
            </div>








          <?php
              // $author_name = get_post_meta($post->ID, 'author_name', true);
              // $authorCurrent = array( get_user_by( 'id', $post->post_author ) );
              //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                'post_type' => 'voice',
                'company'=>'taxria',
                'posts_per_page' => 3,
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

      </div>
<!--      <div class="ssbtnwidth">-->
<!--        <a href="taxvoicelist" style="text-decoration:none;">-->
<!--          <div-->
<!--            class="ssbtn">-->
<!--            詳しく観る</div>-->
<!--        </a>-->
<!--      </div>-->
    </div>
    </div>
  </div>
</main>