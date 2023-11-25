<?php
class Custom_Widget extends WP_Widget {
    
    // Constructor function
    public function __construct() {
        parent::__construct(
            'custom_widget', // Base ID
            __('Custom Widget', 'text_domain'), // Widget name
            array(
                'description' => __('A simple custom widget.', 'text_domain'),
            )
        );
    }

    // Output the widget content
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $message = isset($instance['message']) ? $instance['message'] : '';

        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<p>' . esc_html($message) . '</p>';

        echo $args['after_widget'];
    }

    // Output the widget form in the admin
    public function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $message = isset($instance['message']) ? esc_attr($instance['message']) : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Message:'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>
        </p>
        <?php
    }

    // Update widget settings
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['message'] = (!empty($new_instance['message'])) ? strip_tags($new_instance['message']) : '';
        return $instance;
    }
}

// Register the widget
function register_custom_widget() {
    register_widget('Custom_Widget');
}

add_action('widgets_init', 'register_custom_widget');
