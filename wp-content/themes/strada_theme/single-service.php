<?php
/* Template Name: Single Service */
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_header($url_type);
}else{
    get_header('sz');
}

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
        <?php if (function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>
    <!-- end c-breakcrumds -->
    <div class="c-mainTitle c-mainTitle-overlay">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
            <?php the_title(); ?>
          </h1>
        </div>
      </div>
    </div>

    <!-- end c-mainTitle -->
    <div class="l-container">
        <div class="term-excerpt">
            <?php echo the_excerpt(); ?>
            <hr class="c-line-bottom" />
        </div>
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
        </div>
      </div>
    </div>
  </main>
<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_footer($url_type);
}else{
    get_footer('sz');
}
 ?>