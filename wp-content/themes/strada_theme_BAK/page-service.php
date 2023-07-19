<?php
/* Template Name: Service Page */
get_header();
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle">
    <img src="<?php echo get_template_directory_uri(); ?>/images/service/mv.jpg" alt="" />
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
          事業内容
          <span>Service</span>
        </h1>
      </div>
    </div>
  </div>
  <!-- end c-mainTitle -->
  <div class="l-container">
    <div class="p-service__list">
      <a href="<?php echo get_permalink(65); ?>">
        法人設立支援
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
      <a href="<?php echo get_permalink(65); ?>">
        記帳代行・税務顧問
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
      <a href="<?php echo get_permalink(65); ?>">
        国際税務
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
      <a href="<?php echo get_permalink(65); ?>">
        相続税申告
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
      <a href="<?php echo get_permalink(65); ?>">
        確定申告・Airbnb確定申告
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
    </div>
  </div>
</main>

<?php get_footer(); ?>