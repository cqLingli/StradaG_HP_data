<?php
/* Template Name: Recruit Page */
get_header();
?>
<main class="l-main p-recruit">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    endif;
  ?>
  <div class="p-recruit">
    <div class="l-container">
      <div class="p-recruitBlock t-block">

        <div class="p-recruitHead">
          <?php if( have_rows('recruit') ): ?>
              <?php $i = 0; ?>
              <?php while( have_rows('recruit') ): the_row(); ?>           
                  <?php $title = get_sub_field('recruit_title'); ?>
                  <a href="javascript:void(0)" class="<?php echo ( (!$i) ? "is-active" : "" ); ?>" data-tab="<?php echo $title; ?>" id="recruit<?php echo $i+1; ?>"><?php echo $title; ?></a>
                  <?php $i++; ?>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <?php if( have_rows('recruit') ): ?>
              <?php $j = 0; ?>
              <?php while( have_rows('recruit') ): the_row();  ?>             
                  <?php $title = get_sub_field('recruit_title'); ?>
                  <div class="p-recruitContent" id="<?php echo $title;?>" style="<?php echo ( (!$j) ? "display:block;" : "" ); ?>">
                    <h3>募集要項</h3>
                    <div class="p-recruitContent__list">
                    <?php if( have_rows('recruit_infor') ): ?>
    
                        <?php while( have_rows('recruit_infor') ): the_row();        ?>            
                        <?php    
                            $head = get_sub_field('recruit_header');
                            $body = get_sub_field('recruit_content');
                        ?>
                       
                          <dl>
                            <dt><?php echo $head; ?></dt>
                            <dd><?php echo $body; ?></dd>
                          </dl>
     
                        <?php endwhile; ?>
                    <?php endif; ?>     
                    </div>
                    <div class="p-recruitBtn">
                      <?php $link = home_url('recruit').'/form'.($j+1); ?>
                      <a href="<?php echo $link; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="47.278" height="46.829" viewBox="0 0 47.278 46.829">
                          <path id="Path_8595" data-name="Path 8595" d="M42.8,2a2.342,2.342,0,0,1,2.341,2.341v8.8l-4.683,4.683V6.683H7.683V44.146h32.78V37.688l4.683-4.683V46.487A2.342,2.342,0,0,1,42.8,48.829H5.341A2.342,2.342,0,0,1,3,46.487V4.341A2.342,2.342,0,0,1,5.341,2Zm4.163,15.941,3.311,3.311L32.067,39.463l-3.315,0,0-3.306ZM26.414,25.414V30.1H14.707V25.414Zm7.024-9.366v4.683H14.707V16.049Z" transform="translate(-3 -2)"></path>
                        </svg>
                        採用エントリーはこちらから                  
                      </a>
                    </div> 
                  </div>
                  <?php $j++; ?>
              <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<script>
  jQuery(function(){
    $('.p-recruitHead a').on('click', function(e){
      e.stopImmediatePropagation();
      var data = $(this).data('tab');
      $('.p-recruitHead a').removeClass('is-active');
      $(this).addClass('is-active');

      $('.p-recruitContent').hide();
      $('#'+data).show();
    })
    if(window.location.hash){
        var speed = 500;
        var target = $(window.location.hash);
        var position = target.offset().top;
        $("html, body").animate({
            scrollTop: position
        }, speed, "swing");      
       target.trigger('click');
    }
  })
</script>
<?php get_footer(); ?>