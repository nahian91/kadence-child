<?php 

class Custom_Widget extends WP_Widget {    
    // Constructor function
    public function __construct() {
        parent::__construct(
            'custom_widget',
            __('Custom Widget', 'kadence'),
            array(
                'description' => __('A simple subscription widget.', 'kadence'),
            )
        );
    }
  
    // Output the widget content
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
  
        echo $args['before_widget'];
        ?>
            <div class="subscribe-widget">
                <img src="http://localhost/fluentforms/wp-content/uploads/2023/11/msg.png" alt="">
                <div class="subscribe-widget-content">
                    <h4>Subscribe for <br> weekly email</h4>
                    <?php echo do_shortcode('[fluentform id="4"]');?>
                    <p>we dont spam you</p>
                </div>
            </div>
        <?php 
  
        echo $args['after_widget'];
    }
  
    // Output the widget form in the admin
    public function form($instance) {
        ?>
            
        <?php
    }
  
    // Update widget settings
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
  }
  
  // Register the widget
  function register_custom_widget() {
    register_widget('Custom_Widget');
  }
  add_action('widgets_init', 'register_custom_widget');