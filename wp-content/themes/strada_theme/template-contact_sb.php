<main class="l-main p-contact">
<div class="l-container">
<div class="c-mainTitle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
          お問い合わせ
            <span>Contact</span>
          </h1>
        </div>
      </div>
    </div>
    </div>
  <div class="contactBox">
  <div class="l-container">
  <div class="contact_containStyle">
    <p class="contactStyle">各種お問い合わせは、こちらのフォームよりお送りください。翌営業日を目安にお返事を差し上げます。</p>
    <div class="contactBox__intro">
    <?php 
                echo do_shortcode('[mwform_formkey key="3998"]');
            ?>
    </div>
  </div>
  </div>
  </div>
</main>
<script type="text/javascript">
  jQuery(function ($) {
    $(".error").each(function (i) {
      $(this).closest('.row').addClass('is-error');
    });
  });
</script>