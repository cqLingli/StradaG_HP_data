<div style="background: #fff;padding:30px">
  <img src="<?php echo get_template_directory_uri(); ?>/images/top/Contact_top.png" alt="" style="width:100%" />
</div>
  <div class="contactBox">
    <p style="padding:15px">各種お問い合わせは、こちらのフォームよりお送りください。翌営業日を目安にお返事を差し上げます。</p>
    <div class="contactBox__intro">
    <?php 
                echo do_shortcode('[mwform_formkey key="236"]');
            ?>
    </div>
  </div>
<script type="text/javascript">
  jQuery(function ($) {
    $(".error").each(function (i) {
      $(this).closest('.row').addClass('is-error');
    });
  });
</script>