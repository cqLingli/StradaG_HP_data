<?php
/* Template Name: social-media-policy */
get_header(); ?>

<main class="l-main privacyStatement">
    <div class="c-breakcrumds">
        <div class="l-container">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>
    <?php get_template_part('template', 'social-media-policy'); ?>
</main>

<?php get_footer(); ?>