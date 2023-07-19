<?php if ( is_active_sidebar( 'right-col-sidebar',true ) || is_active_sidebar( 'sidebar-tracking',true )  ) : ?>
	<?php dynamic_sidebar('right-col-sidebar');?>
	<?php if( !wp_is_mobile() ) :?>
		<?php if ( is_active_sidebar( 'sidebar-tracking',true ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-tracking' ); ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>