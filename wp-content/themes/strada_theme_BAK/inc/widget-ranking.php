<?php
class Cps_Ranking_Widget extends WP_Widget {
	
	public function __construct() {
		$widget_options = array(
			'classname'                     => 'widget-ranking',
			'customize_selective_refresh'   => FALSE,
		);

		parent::__construct(
			'styled_post_list1_widget',// ID
			__('人気トップ3位ランキング', 'spth_w'),
			array(
				'classname' => 'widget-ranking',
				'description' => __('人気トップ3位を任意にランキングすることができます。', 'spth_w')
			)
		);
	}
	
	public function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$cps_ranking_style = apply_filters( 'widget_radio', empty( $instance['cps_ranking_style'] ) ? 'have-rank' : $instance['cps_ranking_style'], $instance, $this->id_base );

		$cps_ranking01 = apply_filters( 'widget_body', empty( $instance['cps_ranking01'] ) ? '' : $instance['cps_ranking01'], $instance, $this->id_base );
		$cps_ranking02 = apply_filters( 'widget_body', empty( $instance['cps_ranking02'] ) ? '' : $instance['cps_ranking02'], $instance, $this->id_base );
		$cps_ranking03 = apply_filters( 'widget_body', empty( $instance['cps_ranking03'] ) ? '' : $instance['cps_ranking03'], $instance, $this->id_base );
		$cps_ranking04 = apply_filters( 'widget_body', empty( $instance['cps_ranking04'] ) ? '' : $instance['cps_ranking04'], $instance, $this->id_base );
		$cps_ranking05 = apply_filters( 'widget_body', empty( $instance['cps_ranking05'] ) ? '' : $instance['cps_ranking05'], $instance, $this->id_base );
		



		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
			<ul class="c-sidebar__post c-sidebar__post--num">
        <li>
					<a href="<?php echo get_permalink($cps_ranking01); ?>">
						<?php
							if ( has_post_thumbnail($cps_ranking01) ) {
								echo get_the_post_thumbnail( $cps_ranking01, 'full' );
							} else {
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="<?php the_title(); ?>">
						<?php } ?>
            <p>
              <small><?php echo get_the_date('Y.m.d', $cps_ranking01); ?></small>
              <span><?php echo get_the_title($cps_ranking01); ?></span>
            </p>
          </a>
				</li>
				<li>
          <a href="<?php echo get_permalink($cps_ranking02); ?>">
						<?php
							if ( has_post_thumbnail($cps_ranking02) ) {
								echo get_the_post_thumbnail( $cps_ranking02, 'full' );
							} else {
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="<?php the_title(); ?>">
						<?php } ?>
            <p>
              <small><?php echo get_the_date('Y.m.d', $cps_ranking02); ?></small>
              <span><?php echo get_the_title($cps_ranking02); ?></span>
            </p>
          </a>
				</li>
				<li>
          <a href="<?php echo get_permalink($cps_ranking03); ?>">
						<?php
							if ( has_post_thumbnail($cps_ranking03) ) {
								echo get_the_post_thumbnail( $cps_ranking03, 'full' );
							} else {
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="<?php the_title(); ?>">
						<?php } ?>
            <p>
              <small><?php echo get_the_date('Y.m.d', $cps_ranking03); ?></small>
              <span><?php echo get_the_title($cps_ranking03); ?></span>
            </p>
          </a>
				</li>
				<li>
          <a href="<?php echo get_permalink($cps_ranking04); ?>">
						<?php
							if ( has_post_thumbnail($cps_ranking04) ) {
								echo get_the_post_thumbnail( $cps_ranking04, 'full' );
							} else {
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="<?php the_title(); ?>">
						<?php } ?>
            <p>
              <small><?php echo get_the_date('Y.m.d', $cps_ranking04); ?></small>
              <span><?php echo get_the_title($cps_ranking04); ?></span>
            </p>
          </a>
				</li>
				<li>
          <a href="<?php echo get_permalink($cps_ranking05); ?>">
						<?php
							if ( has_post_thumbnail($cps_ranking05) ) {
								echo get_the_post_thumbnail( $cps_ranking05, 'full' );
							} else {
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="<?php the_title(); ?>">
						<?php } ?>
            <p>
              <small><?php echo get_the_date('Y.m.d', $cps_ranking05); ?></small>
              <span><?php echo get_the_title($cps_ranking05); ?></span>
            </p>
          </a>
        </li>
      </ul>
		<?php
		echo $args['after_widget'];
	}
	
	public function form( $instance ) {
		$defaults = array(
			'title' => '',
			'cps_ranking_style' => 'have-rank',
			'cps_ranking01' => '',
			'cps_ranking02' => '',
			'cps_ranking03' => '',
			'cps_ranking04' => '',
			'cps_ranking05' => '',
		);
		$instance   = wp_parse_args( (array) $instance, $defaults );
		$title  = sanitize_text_field( $instance['title'] );
		$cps_ranking_style  = $instance['cps_ranking_style'];
	
		$cps_ranking01  = $instance['cps_ranking01'];
		$cps_ranking02  = $instance['cps_ranking02'];
		$cps_ranking03  = $instance['cps_ranking03'];
		$cps_ranking04  = $instance['cps_ranking04'];
		$cps_ranking05  = $instance['cps_ranking05'];
		
		?>
		<style type="text/css">
			.caption label{
				font-weight: bold;
				font-size: 0.8rem!important;
			}
			#media{
				margin-top: 10px;
			}
			input, button, textarea, select {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				cursor: pointer;
			}
			input[type="button"]{
				padding: 10px;
				font-size: 12px;
				background: #eee;
				border: 3px #aaa solid;
			}

		</style>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('ランキングタイトル'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<!-- <p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking_style'); ?>"><?php _e('スタイル'); ?></label><br>
			<div style="padding: 5px; margin-top: -12px; background: #eee;" >

				<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking_style'); ?>" name="<?php echo $this->get_field_name('cps_ranking_style'); ?>" type="radio"<?php checked('have-rank', $cps_ranking_style); ?> value="have-rank" />順位有り&nbsp;&nbsp;&nbsp;

				<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking_style'); ?>" name="<?php echo $this->get_field_name('cps_ranking_style'); ?>" type="radio"<?php checked('no-rank', $cps_ranking_style); ?> value="no-rank" />順位なし
			</div>
		</p> -->
		
		<p class="caption">
			<div style="font-weight: bold" >ランキング１位</div>
			<select style="width: 100%;" id="<?php echo $this->get_field_id('cps_ranking01'); ?>" name="<?php echo $this->get_field_name('cps_ranking01'); ?>">
				<?php
					$args = array(
						'posts_per_page' => -1,
					);
					// the query
					$the_query = new WP_Query( $args );
				?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $postID = get_the_ID(); ?>
				<?php if(intval($cps_ranking01) == $postID ) { ?>
				<option value="<?php echo $postID; ?>" selected><?php the_title(); ?></option>
				<?php } else { ?>
				<option value="<?php echo $postID; ?>"><?php the_title(); ?></option>
				<?php } ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</select>
		</p>


		<p class="caption">
			<div style="font-weight: bold" >ランキング2位</div>
			<select style="width: 100%;" id="<?php echo $this->get_field_id('cps_ranking02'); ?>" name="<?php echo $this->get_field_name('cps_ranking02'); ?>">
				<?php
					$args = array(
						'posts_per_page' => -1,
					);
					// the query
					$the_query = new WP_Query( $args );
				?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $postID = get_the_ID(); ?>
				<?php if(intval($cps_ranking02) == $postID ) { ?>
				<option value="<?php echo $postID; ?>" selected><?php the_title(); ?></option>
				<?php } else { ?>
				<option value="<?php echo $postID; ?>"><?php the_title(); ?></option>
				<?php } ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</select>
		</p>

		<p class="caption">
			<div style="font-weight: bold" >ランキング3位</div>
			<select style="width: 100%;" id="<?php echo $this->get_field_id('cps_ranking03'); ?>" name="<?php echo $this->get_field_name('cps_ranking03'); ?>">
				<?php
					$args = array(
						'posts_per_page' => -1,
					);
					// the query
					$the_query = new WP_Query( $args );
				?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $postID = get_the_ID(); ?>
				<?php if(intval($cps_ranking03) == $postID ) { ?>
				<option value="<?php echo $postID; ?>" selected><?php the_title(); ?></option>
				<?php } else { ?>
				<option value="<?php echo $postID; ?>"><?php the_title(); ?></option>
				<?php } ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</select>
		</p>

		<p class="caption">
			<div style="font-weight: bold" >ランキング4位</div>
			<select style="width: 100%;" id="<?php echo $this->get_field_id('cps_ranking04'); ?>" name="<?php echo $this->get_field_name('cps_ranking04'); ?>">
				<?php
					$args = array(
						'posts_per_page' => -1,
					);
					// the query
					$the_query = new WP_Query( $args );
				?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $postID = get_the_ID(); ?>
				<?php if(intval($cps_ranking04) == $postID ) { ?>
				<option value="<?php echo $postID; ?>" selected><?php the_title(); ?></option>
				<?php } else { ?>
				<option value="<?php echo $postID; ?>"><?php the_title(); ?></option>
				<?php } ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</select>
		</p>

		<p class="caption">
			<div style="font-weight: bold" >ランキング5位</div>
			<select style="width: 100%;" id="<?php echo $this->get_field_id('cps_ranking05'); ?>" name="<?php echo $this->get_field_name('cps_ranking05'); ?>">
				<?php
					$args = array(
						'posts_per_page' => -1,
					);
					// the query
					$the_query = new WP_Query( $args );
				?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $postID = get_the_ID(); ?>
				<?php if(intval($cps_ranking05) == $postID ) { ?>
				<option value="<?php echo $postID; ?>" selected><?php the_title(); ?></option>
				<?php } else { ?>
				<option value="<?php echo $postID; ?>"><?php the_title(); ?></option>
				<?php } ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</select>
		</p>

		<?php
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title']  = sanitize_text_field( $new_instance['title'] );
		$instance['cps_ranking_style'] = $new_instance['cps_ranking_style'];
		
		$instance['cps_ranking01'] = $new_instance['cps_ranking01'];
		$instance['cps_ranking02'] = $new_instance['cps_ranking02'];
		$instance['cps_ranking03'] = $new_instance['cps_ranking03'];
		$instance['cps_ranking04'] = $new_instance['cps_ranking04'];
		$instance['cps_ranking05'] = $new_instance['cps_ranking05'];

		return $instance;
	}
}

function theme_register_widget() {
	register_widget( 'Cps_Ranking_Widget' );
}
add_action( 'widgets_init', 'theme_register_widget' );
?>