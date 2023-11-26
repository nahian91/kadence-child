<?php

/**
 * Integrations Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'integrations-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'integration';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

// $hero_title =  get_field('title');
// $hero_content =  get_field('content');
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

<!-- CTA Section Start --->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="site-container">
    <?php
// Define your custom query to get posts based on categories
$categories = get_terms('your_custom_taxonomy'); // replace 'your_custom_taxonomy' with the actual taxonomy name

foreach ($categories as $category) {
    $args = array(
        'post_type'      => 'your_custom_post_type',
        'posts_per_page' => -1,
        'tax_query'      => array(
            array(
                'taxonomy' => 'your_custom_taxonomy',
                'field'    => 'slug',
                'terms'    => $category->slug,
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div id="' . $category->slug . '" class="tab-content">';
        while ($query->have_posts()) {
            $query->the_post();
            // Output your post content here
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<div>' . get_the_content() . '</div>';
        }
        echo '</div>';
    }

    wp_reset_postdata();
}
?>

    </div>
</section>
<!-- CTA Section End -->	