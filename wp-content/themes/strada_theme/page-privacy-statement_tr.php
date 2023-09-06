<?php
/* Template Name: privacy-statement_tr */
get_header("tr"); ?>

<main class="l-main privacyStatement">
    <div class="c-breakcrumds">
        <div class="l-container">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>
    <?php get_template_part('template', 'privacy-statement'); ?>
</main>

<?php get_footer("tr"); ?>