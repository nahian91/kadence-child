<?php

/**
 * CTA Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cta';
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
        <div class="cta">	
            <h4>Join <span>300K+</span> <br> happy customers <br> globally</h4>
            <a href="" class="btn-bg-white">buy now</a>
        </div>
    </div>
</section>
<!-- CTA Section End -->	