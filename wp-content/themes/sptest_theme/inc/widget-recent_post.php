<?php
/**
* Adds Recent Post widget
*/
class Recentpost_Widget extends WP_Widget {

    /**
    * Register widget with WordPress
    */
    function __construct() {
        parent::__construct(
            'recentpost_widget', // Base ID
            esc_html__( 'オリジナル新着記事順', 'textdomain' ), // Name
            array( 'description' => esc_html__( 'オリジナル新着記事順', 'textdomain' ), ) // Args
        );
    }

    /**
    * Widget Fields
    */
    private $widget_fields = array(
        array(
            'label' => '表示件数 ',
            'id' => 'number',
            'type' => 'text',
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
        echo '<div class="post-sidebar">';
        query_posts(array('post_type' => 'post','posts_per_page' => $instance['number'], 'paged' => get_query_var('paged')) );
        if (have_posts()) :
            while (have_posts()) : the_post();?>
                <div class="items c-post_hover">
                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                        <div class="img">
                            <div class="thumb">
                                <?php if (has_post_thumbnail()) {
                                         the_post_thumbnail();
                                    }else{
                                        ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.png" alt="">
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="content">
                            <div class="tlt ">
                                <p><?php echo get_the_title() ?></p>
                            </div>
                            <div class="inner">
                                <div class="date">
                                    <p>
                                        <?php echo get_the_date('Y.m.j') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_query();
        endif;
        echo '</div>';
        echo $args['after_widget'];
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
} // class Recentpost_Widget

// register Recent Post widget
function register_recentpost_widget() {
    register_widget( 'Recentpost_Widget' );
}
add_action( 'widgets_init', 'register_recentpost_widget' );
?>