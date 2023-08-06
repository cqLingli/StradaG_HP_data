<main class="l-main p-contact">
<div class="l-container">
<div class="c-mainTitle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
          お問い合わせ
            <span>CONTACT</span>
          </h1>
        </div>
      </div>
    </div>
    </div>
  <div class="contactBox">
  <div class="l-container">
    <div style="margin-left:5.5%;margin-right:5.5%">
    <p style="padding:15px;font-size:1.5rem">下記お問合せフォームにご記載頂きご送信ください。担当者より折り返しご連絡させていただきます。※メールでのご相談は受け付けておりません。 </p>
    <div class="contactBox__intro">
    <?php 
                echo do_shortcode('[mwform_formkey key="3832"]');
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