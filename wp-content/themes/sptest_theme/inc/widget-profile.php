<?php
/**
* Adds Profile widget
*/
class Profile_Widget extends WP_Widget {

	/**
	* Register widget with WordPress
	*/
	function __construct() {
		parent::__construct(
			'profile_widget', // Base ID
			esc_html__( 'プロフィール', 'textdomain' ), // Name
			array( 'description' => esc_html__( 'プロフィールを表示します。', 'textdomain' ), ) // Args
		);
		add_action( 'admin_footer', array( $this, 'media_fields' ) );
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
	}

	/**
	* Widget Fields
	*/
	private $widget_fields = array(
		array(
			'label' => '画像',
			'id' => 'img',
			'type' => 'media',
		),
		array(
			'label' => 'プロフィール名',
			'id' => 'name',
			'type' => 'text',
		),
		array(
			'label' => '肩書き',
			'id' => 'job',
			'type' => 'text',
		),
		array(
			'label' => '説明',
			'id' => 'info',
			'type' => 'textarea',
		),
	);

	/**
	* Front-end display of widget
	*/
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		// Output widget title
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		// Output generated fields
		?>
			<div class="c-profile">
				<div class="img c-image_hover">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>">
						<img src="<?php echo $instance['img'] ?>" alt="">
					</a>
				</div>
				<p class="name">
					<?php echo $instance['name'] ?>
				</p>
				<p class="job">
					<?php echo $instance['job'] ?>
				</p>
				<p class="info">
					<?php echo $instance['info'] ?>
				</p>
				<?php
					$user = get_the_author_meta( 'yoursite_url', $post->post_author );
					$facebook = get_the_author_meta( 'facebook_url', $post->post_author );
					$twitter = get_the_author_meta( 'twitter_url', $post->post_author );
					$instagram = get_the_author_meta( 'instagram_url', $post->post_author );
					$pinterest = get_the_author_meta( 'pinterest_url', $post->post_author );
					$youtube = get_the_author_meta( 'youtube_url', $post->post_author );
					$contact = get_the_author_meta( 'contact_url', $post->post_author );
					?>
					<div class="profile-sns">
						<ul class="l-author_nav">
							<?php if ( $user!="") :?>
								<li class="l-author_nav__item l-author_nav__item--url"><a href="<?php echo $user ?>" target="_blank"></a></li>
							<?php endif;?>
							<?php if ( $facebook!="") :?>
								<li class="l-author_nav__item l-author_nav__item--facebook"><a href="<?php echo $facebook ?>" target="_blank"></a></li>
							<?php endif;?>
							<?php if ( $twitter!="") :?>
								<li class="l-author_nav__item l-author_nav__item--twitter"><a href="<?php echo $twitter ?>" target="_blank"></a></li>
							<?php endif;?>
							<?php if ( $instagram!="") :?>
								<li class="l-author_nav__item l-author_nav__item--instagram"><a href="<?php echo $instagram ?>" target="_blank"></a></li>
							<?php endif;?>
							<?php if ( $pinterest!="") :?>
								<li class="l-author_nav__item l-author_nav__item--pinterest"><a href="<?php echo $pinterest ?>" target="_blank"></a></li>
							<?php endif;?>
							<?php if ( $youtube!="") :?>
								<li class="l-author_nav__item l-author_nav__item--youtube"><a href="<?php echo $youtube ?>" target="_blank"></a></li>
							<?php endif;?>
							<?php if ( $contact!="") :?>
								<li class="l-author_nav__item l-author_nav__item--contact"><a href="<?php echo $contact ?>" target="_blank"></a></li>
							<?php endif;?>
						</ul>
					</div>
			</div>
		<?php
		echo $args['after_widget'];
	}

	/**
	* Media Field Backend
	*/
	public function media_fields() {
		?><script>
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$(document).on('click','.custommedia',function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$('input#'+id).val(attachment.url);
								$('input#'+id).trigger('change');
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
				}
			});
		</script><?php
	}

	/**
	* Back-end widget fields
	*/
	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $widget_field['default'], 'textdomain' );
			switch ( $widget_field['type'] ) {
				case 'media':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'textdomain' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_url( $widget_value ).'">';
					$output .= '<button id="'.$this->get_field_id( $widget_field['id'] ).'" class="button select-media custommedia">Add Media</button>';
					$output .= '</p>';
					break;
				case 'textarea':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'textdomain' ).':</label> ';
					$output .= '<textarea class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" rows="6" cols="6" value="'.esc_attr( $widget_value ).'">'.$widget_value.'</textarea>';
					$output .= '</p>';
					break;
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'textdomain' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'textdomain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'タイトル:', 'textdomain' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	/**
	* Sanitize widget form values as they are saved
	*/
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				case 'checkbox':
					$instance[$widget_field['id']] = $_POST[$this->get_field_id( $widget_field['id'] )];
					break;
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
} // class Profile_Widget

// register Profile widget
function register_profile_widget() {
	register_widget( 'Profile_Widget' );
}
add_action( 'widgets_init', 'register_profile_widget' );
?>