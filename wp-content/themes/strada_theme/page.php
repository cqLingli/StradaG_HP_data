<?php
get_header();
?>
  <!-- .l-main | メインコンテンツ -->
  <main class="l-main">
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
            <?php the_title(); ?>
            <span>
              <?php if(is_page('privacy-policy')){
                echo 'PRIVACY POLICY';
              }?>
            </span>
          </h1>
        </div>        
      </div>
    </div>
    <!-- end c-mainTitle -->
    <div class="l-container">
      <div class="l-content">
        <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
      
            the_content();
            // End the loop.
            endwhile;
            ?>
        </div>
      </div>
  </main>
<?php get_footer(); ?>