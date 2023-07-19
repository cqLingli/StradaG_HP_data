<?php
/* Template Name: Single Voice */
get_header();
?>
 <!-- .l-main | メインコンテンツ -->
  <main class="l-main s-voice">
    <div class="c-breakcrumds">
      <div class="l-container">
        <?php if (function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>
    <!-- end c-breakcrumds -->
    <div class="c-mainTitle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
            <?php echo get_the_title(); ?>
            <span><?php echo get_field('name'); ?></span>
          </h1>
        </div>
      </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="l-container">
    <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
              if(strlen(get_the_content())){            
              ?>
                <div class="p-column__post">
                  <div class="box">
                          <div class="box__image">
                        <?php
                        if (has_post_thumbnail()) {
                          echo get_the_post_thumbnail();
                        }
                        ?>
                          </div>
                      <div class="_content">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <?php the_content(); ?>
                        </article>
                      </div>
                  </div>
                </div>
              <?php           
              }else{
                ?>               
                  <div class="singleVoice">
                    <div class="singleVoice-main">
                      <div class="singleVoice-content">
                        <div class="voice-content voice-content01">
                          <h2>1. 各項目の弊法人のサービスや担当者の対応への満足度について</h2>
                          <h3>コミュニケーション </h3>
                          <div class="qa-part">
                            <h4 class="ttl">A. お客様の疑問・不明点に関して、担当者は的確にお答えできていますか？</h4>
                              <?php if( have_rows('group_01') ): ?>
                                <?php while( have_rows('group_01') ): the_row(); 
                                    $child = get_sub_field('child_01');
                                    $choice = $child['choice'];
                                    $more_content = $child['more_content'];
                                    ?>
                                    <div class="choice-part cols-5">
                                        <div class="choice <?php echo ($choice == "c1" ? "is-active" : ""); ?>">満足</div>
                                        <div class="choice <?php echo ($choice == "c2" ? "is-active" : ""); ?>">やや満足</div>
                                        <div class="choice <?php echo ($choice == "c3" ? "is-active" : ""); ?>">どちらでもない</div>
                                        <div class="choice <?php echo ($choice == "c4" ? "is-active" : ""); ?>">やや不満</div>
                                        <div class="choice <?php echo ($choice == "c5" ? "is-active" : ""); ?>">不満</div>
                                    </div>
                                    <?php if($more_content) : ?>
                                    <div class="more-content">
                                      <div class="more-contentTtl">ご意見・改善点等</div>
                                      <p><?php echo $more_content; ?></p>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                              <?php endif; ?>
                            
                          </div>
                          <div class="qa-part">
                            <h4 class="ttl">B. お客様にとって、担当者は話しやすい・相談しやすい雰囲気がありますか？</h4>
                            <?php if( have_rows('group_01') ): ?>
                                <?php while( have_rows('group_01') ): the_row(); 
                                    $child = get_sub_field('child_02');
                                    $choice = $child['choice'];
                                    $more_content = $child['more_content'];
                                    ?>
                                    <div class="choice-part cols-5">
                                        <div class="choice <?php echo ($choice == "c1" ? "is-active" : ""); ?>">満足</div>
                                        <div class="choice <?php echo ($choice == "c2" ? "is-active" : ""); ?>">やや満足</div>
                                        <div class="choice <?php echo ($choice == "c3" ? "is-active" : ""); ?>">どちらでもない</div>
                                        <div class="choice <?php echo ($choice == "c4" ? "is-active" : ""); ?>">やや不満</div>
                                        <div class="choice <?php echo ($choice == "c5" ? "is-active" : ""); ?>">不満</div>
                                    </div>
                                    <?php if($more_content) : ?>
                                    <div class="more-content">
                                      <div class="more-contentTtl">ご意見・改善点等</div>
                                      <p><?php echo $more_content; ?></p>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                              <?php endif; ?>
                          </div>

                          <h3>スピード</h3>
                          <div class="qa-part">
                            <h4 class="ttl">C. お客様の質問に対する担当者の回答の速さに満足していますか？</h4>
                              <?php if( have_rows('group_01') ): ?>
                                <?php while( have_rows('group_01') ): the_row(); 
                                    $child = get_sub_field('child_03');
                                    $choice = $child['choice'];
                                    $more_content = $child['more_content'];
                                    ?>
                                    <div class="choice-part cols-5">
                                        <div class="choice <?php echo ($choice == "c1" ? "is-active" : ""); ?>">満足</div>
                                        <div class="choice <?php echo ($choice == "c2" ? "is-active" : ""); ?>">やや満足</div>
                                        <div class="choice <?php echo ($choice == "c3" ? "is-active" : ""); ?>">どちらでもない</div>
                                        <div class="choice <?php echo ($choice == "c4" ? "is-active" : ""); ?>">やや不満</div>
                                        <div class="choice <?php echo ($choice == "c5" ? "is-active" : ""); ?>">不満</div>
                                    </div>
                                    <?php if($more_content) : ?>
                                    <div class="more-content">
                                      <div class="more-contentTtl">ご意見・改善点等</div>
                                      <p><?php echo $more_content; ?></p>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                              <?php endif; ?>
                          </div>
                          <div class="qa-part">
                            <h4 class="ttl">D. 担当者の、資料を頂いてからの記帳・試算表を作成する早さに満足していますか？</h4>
                            <?php if( have_rows('group_01') ): ?>
                                <?php while( have_rows('group_01') ): the_row(); 
                                    $child = get_sub_field('child_04');
                                    $choice = $child['choice'];
                                    $more_content = $child['more_content'];
                                    ?>
                                    <div class="choice-part cols-5">
                                        <div class="choice <?php echo ($choice == "c1" ? "is-active" : ""); ?>">満足</div>
                                        <div class="choice <?php echo ($choice == "c2" ? "is-active" : ""); ?>">やや満足</div>
                                        <div class="choice <?php echo ($choice == "c3" ? "is-active" : ""); ?>">どちらでもない</div>
                                        <div class="choice <?php echo ($choice == "c4" ? "is-active" : ""); ?>">やや不満</div>
                                        <div class="choice <?php echo ($choice == "c5" ? "is-active" : ""); ?>">不満</div>
                                    </div>
                                    <?php if($more_content) : ?>
                                    <div class="more-content">
                                      <div class="more-contentTtl">ご意見・改善点等</div>
                                      <p><?php echo $more_content; ?></p>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                              <?php endif; ?>
                          </div>
                        </div>
                                                  
                          <?php 
                          $images = get_field('img');
                          if( $images ): ?>
                              <div class="singleVoice-content__img">
                                  <?php foreach( $images as $image ): ?>
                                      <figure>
                                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                      </figure>
                                  <?php endforeach; ?>
                                  </div>
                          <?php endif; ?>
                      </div>
                    </div>
                  </div>          
                <?php
              }
              // Your loop code
          endwhile;
        endif; 
      ?>
      </div>
  </main>
<?php get_footer(); ?>