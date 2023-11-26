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

$test =  get_field('test');
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

<section class="integrations-area">
    <div class="site-container">
        <div class="forms-demo">
            <div class="forms-demo-category">
                <h4>Categories</h4>
                <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'integrations-category',
                        'hide_empty' => true,                    
                    ));

                    if (!is_wp_error($categories) && !empty($categories)) {
                        ?>
                            <ul>
                                <?php foreach ($categories as $category) { ?>
                                    <li class="tab-button" data-tab="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></li>
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
                        'post_type' => 'integrations',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'integrations-category',
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
                                    $post_id = get_the_ID();
                                    $integration_image = get_field('integration_info_image', $post_id);
                                    $integration_title = get_field('integration_title', $post_id);
                                    $integration_description = get_field('integration_description', $post_id);
                                    ?>
                                        <div class="single-integration-box">
                                            <img src="<?php echo $integration_image;?>" alt="">
                                            <h4><?php echo $integration_title;?></h4>
                                            <p><?php echo $integration_description;?></p>
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
    </div>
</section>
<!-- CTA Section End -->	