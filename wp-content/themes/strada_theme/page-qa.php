<?php
/* Template Name: QA Page */
get_header();
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-qa">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/qa/mv.jpg" alt="" /> -->
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
          よくあるご質問
          <span>QA</span>
        </h1>
      </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
  <div class="l-container">
    <div class="p-qa__faq">
      <?php
      if( have_rows('qa') ):
          $i = 0;
          while( have_rows('qa') ) : the_row(); $i++;
              // Get parent value.
              $parent_title = get_sub_field('qa_title');
              ?>
              <div class="c-tab" tabindex="<?php echo $i; ?>">
                <a href="#<?php echo $parent_title ?>"><?php echo $parent_title; ?></a>
              </div>
              <?php
          endwhile;
      endif;
      ?>
    </div>
    <div class="p-qa__content">
      <?php
      if( have_rows('qa') ):
          while( have_rows('qa') ) : the_row();

              // Get parent value.
              $parent_title = get_sub_field('qa_title');
              ?>
              <div class="c-qa-list" id="<?php echo $parent_title; ?>">
                <div class="c-qa-list__title">
                  <p><?php echo $parent_title; ?></p>
                </div>
            
              <?php
              // Loop over sub repeater rows.
              if( have_rows('qa_block') ):
                  while( have_rows('qa_block') ) : the_row();

                      // Get sub value.
                      $q = get_sub_field('q');
                      $a = get_sub_field('a');
                      ?>
                      <div class="c-qa">
                        <div class="c-qa__question">
                          <p class="c-qa__question--icon">Q</p>
                          <p class="c-qa__question--text"><?php echo $q; ?></p>
                        </div>
                        <div class="c-qa__answer">
                          <div class="c-qa__answer___main">
                            <p class="c-qa__answer--icon">A</p>
                            <p class="c-qa__answer--text"><?php echo $a; ?></p>
                          </div>                                
                        </div>
                      </div>
                      <?php
                  endwhile;
              endif;
              ?>
              </div>
              <?php
          endwhile;
      endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>