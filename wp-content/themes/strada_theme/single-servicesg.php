<?php
/* Template Name: Single Service */
session_start();
$url_type = $_SESSION['url_type'];

    get_header("sg");


?>
<?php 
$mv = get_field('s_mv');
if($mv){
  ?>
  <style>
    .s-service .c-mainTitle{
      background-image:url('<?php echo $mv['url']?>');
      background-repeat:no-repeat;
      background-size:cover;
      background-position:center center;
    }
  </style>
  <?php
}
?>
 <!-- .l-main | メインコンテンツ -->
  <main class="l-main s-service">
    <div class="c-breakcrumds">
      <div class="l-container">
            <?php get_template_part('breadcrumb', 'all'); ?>
      </div>
    </div>
    <!-- end c-breakcrumds -->
    <div class="c-mainTitle c-mainTitle-overlay">
      <div class="c-mainTitle_content single-service">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
            <?php the_title(); ?>
          </h1>
        </div>
      </div>
    </div>
      <div class="l-container">
          <div class="term-excerpt">
              <hr class="c-line-bottom" />
              <?php echo the_excerpt(); ?>
              <hr class="c-line-bottom" />
          </div>
      </div>
    <!-- end c-mainTitle -->
      <div class="c-new-content" style="padding-bottom: 100px;">
    <div class="l-container">
      <div class="singleService">
        <div class="singleService-main">
        	<?php
        	if ( have_posts() ) :
        		while ( have_posts() ) : the_post();
        			?>
        			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        				<div class="entry-content page-entry">
        					<?php the_content(); ?>
        				</div>

        			</article>
        		<?php endwhile; ?>

        		<?php
        	else :

        	endif;
        	?>
          <?php
          if( have_rows('service') ):
            while( have_rows('service') ) : the_row();
              ?>
                <div class="singleService-block">
                  <div class="singleService-block__tlt">
                    <h2>
                       <?php echo get_sub_field('tlt') ?>
                    </h2>
                  </div>
                  <div class="singleService-block__content">
                    <?php echo get_sub_field('content');?>
                  </div>
                </div>
              <?php
            endwhile;
          endif;
        ?>

             <div class="entry-content page-entry menberTtile"> <a href="<?php echo str_replace("service", "admin/adminservicelist", get_post_type_archive_link("service"));?>" class="c-back-list">
                     ビザ申請へ戻る
                     <span class="i-arrow">
                </span>
              </a></div>

        </div>
      </div>
    </div>
      </div>
  </main>
<?php
    get_footer("sg");
 ?>
