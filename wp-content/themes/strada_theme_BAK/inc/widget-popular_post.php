<?php
/**
* Adds Popular Post widget
*/
class Popularpost_Widget extends WP_Widget {

    /**
    * Register widget with WordPress
    */
    function __construct() {
        parent::__construct(
            'popularpost_widget', // Base ID
            esc_html__( 'オリジナルよく読まれている記事順', 'textdomain' ), // Name
            array( 'description' => esc_html__( 'オリジナルよく読まれている記事順', 'textdomain' ), ) // Args
        );
    }

    /**
    * Widget Fields
    */
    private $widget_fields = array(
        array(
            'label' => '表示件数',
            'id' => 'number',
            'type' => 'text',
        ),
    );

    /**
    * Front-end display of widget
    */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo '<div class="l-commonPopular-Article">';
        // Output widget title
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        // Output generated fields
        query_posts(array('post_type' => $instance['posttype'], 'post_status' => 'publish' ,'meta_key' => '_views','order' => 'desc', 'orderby' => 'meta_value_num','posts_per_page' => $instance['number'], 'paged' => get_query_var('paged')) );
        ?>
        <div class="p-column__list">
            <?php
            if (have_posts()) :
            while (have_posts()) : the_post();?>
            <div class="item">
              <div class="image">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('full');
                        } else {
                    ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/column/img03.jpg" alt="" />
                    <?php } ?>
              </div>
              <div class="txt">
                <div class="content">
                  <?php the_title(); ?>
                </div>
                <p class="date-cat">
                  <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                </p>
              </div>
              <a href="<?php the_permalink(); ?>"></a>
            </div>

            <?php endwhile;
            wp_reset_query();
        endif;
        echo '</div>';
        echo $args['after_widget'];
        echo '</div>';
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
        $posttype = ! empty( $instance['posttype'] ) ? $instance['posttype'] : 'post';
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'タイトル:', 'textdomain' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
         <!-- Post type Select Menu -->   
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'posttype' ) ); ?>"><?php esc_attr_e( 'Post type:', 'textdomain' ); ?></label>
            <select id="<?php echo $this->get_field_id('posttype'); ?>" name="<?php echo $this->get_field_name('posttype'); ?>" class="widefat" style="width:100%;">
                <option <?php selected( $instance['posttype'], 'post' ); ?> value="post" selected>post</option>
                <?php foreach(get_post_types(array('public'   => true, '_builtin' => false),'objects') as $term) { ?>
                <option <?php selected( $instance['posttype'], $term->name ); ?> value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                <?php } ?>      
            </select>
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
        $instance['posttype'] = ( ! empty( $new_instance['posttype'] ) ) ? strip_tags( $new_instance['posttype'] ) : '';
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
} // class Popularpost_Widget

// register Popular Post widget
function register_popularpost_widget() {
    register_widget( 'Popularpost_Widget' );
}
add_action( 'widgets_init', 'register_popularpost_widget' );
?>