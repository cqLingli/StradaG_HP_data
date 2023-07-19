<?php
/**
* Adds Widget widget
*/
class Category_Widget extends WP_Widget {

	/**
	* Register widget with WordPress
	*/
	function __construct() {
		parent::__construct(
			'category_widget', // Base ID
			esc_html__( 'オリジナルカテゴリー', 'textdomain' ), // Name
			array( 'description' => esc_html__( 'プルダウン形式にカテゴリーを収納します。', 'textdomain' ), ) // Args
		);
	}

	/**
	* Widget Fields
	*/
	private $widget_fields = array(
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
		<div class="widget_categoryC">
			<select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
			    <option value=""><?php echo esc_attr(__('カテゴリーを選択する')); ?></option> 

			    <?php 
			        $categories = get_categories(); 
			        foreach ($categories as $category) {
			            $option .= '<option value="'.get_option('home').'/category/'.$category->slug.'">';
			            $option .= $category->cat_name;
			            $option .= ' ('.$category->category_count.')';
			            $option .= '</option>';
			        }
			        echo $option;
			    ?>
			</select>
		</div>
		</section>
		<?php
	}

	/**
	* Back-end widget fields
	*/
	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $widget_field['default'], 'textdomain' );
			switch ( $widget_field['type'] ) {
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
} // class New_Widget

// register Widget widget
function register_new_widget() {
	register_widget( 'Category_Widget' );
}
add_action( 'widgets_init', 'register_new_widget' );
?>