<?php get_header(); ?>
	<?php if ( have_posts() ) {
		while ( have_posts() ) { the_post();
			the_content();
		}
	} else {
		echo "<p>No content</p>";
	} ?>
<?php get_footer(); ?>
