<?php

/**
 * Forms Demo Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'forms-demo-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'forms-demo';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.


$hero_title =  get_field('hero_title');

// $hero_button_1_text =  get_field('button_1_text');
// $hero_button_1_url =  get_field('button_1_url');
// $hero_button_2_text =  get_field('button_2_text');
// $hero_button_2_url =  get_field('button_2_url');
// $hero_image_desktop_array = get_field('image_desktop');
// if(!empty($hero_image_desktop_array)){
//     $hero_image_desktop_alt = $hero_image_desktop_array['alt'];
//     $hero_image_desktop_id = $hero_image_desktop_array['ID'];
//     $hero_image_desktop_url = ewa_get_image_url_from_image_id( $hero_image_desktop_id, 'large' );
// }
// $hero_image_mobile_array = get_field('image_mobile');
// if(!empty($hero_image_mobile_array)){
//     $hero_image_mobile_alt = $hero_image_mobile_array['alt'];
//     $hero_image_mobile_id = $hero_image_mobile_array['ID'];
//     $hero_image_mobile_url = ewa_get_image_url_from_image_id( $hero_image_mobile_id, 'large' );
// }

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="forms-demo">
        <div class="forms-demo-category">
            <h4>Categories</h4>
            <?php
                $categories = get_terms(array(
                    'taxonomy' => 'forms-demo-category',
                    'hide_empty' => true,                    
                ));

                if (!is_wp_error($categories) && !empty($categories)) {
                    echo $hero_title;
                    ?>
                        <ul>
                            <?php foreach ($categories as $category) { ?>
                                <li class="tab-button" data-tab="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?> <span><?php echo esc_html($category->count); ?></span></li>
                            <?php 
                        } 
                    } 
                    ?>
                        </ul>
                    <?php 
                ?>
            </div>
            <div class="forms-demo-content">
            <?php
                foreach ($categories as $category) :
                $args = array(
                    'post_type' => 'form-demos',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'forms-demo-category',
                            'field' => 'slug',
                            'terms' => $category->slug,
                            'hide_empty' => true,
                        ),
                    ),
                );

                $custom_query = new WP_Query($args); ?>
                <div class="forms-tab-content" id="<?php echo esc_attr($category->slug); ?>">
                    <?php
                        if ($custom_query->have_posts()) {
                            while ($custom_query->have_posts()) : $custom_query->the_post();
                            $demo_short_description =  get_field('demo_short_description');
                                ?>
                                    <div class="single-forms-demo-content">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                                        <h4><?php the_title();?></h4>
                                        
<p><?php echo $demo_short_description;?>g</p>
                                    </div>
                                <?php
                            endwhile;
                            wp_reset_postdata(); // Reset the post data to the main query.
                        }
                        ?>
                    </div>
                <?php
            endforeach;
            ?>
            </div>
    </div>
</section>