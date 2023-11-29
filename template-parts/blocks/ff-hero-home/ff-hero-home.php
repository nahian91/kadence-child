<?php

/**
 * Hero Home Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-home-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-home';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

// $hero_title =  get_field('hero_title');
// $hero_description =  get_field('hero_description');
// $hero_button =  get_field('hero_button');
// $hero_button_label = $hero_button['hero_button_label'];
// $hero_button_url = $hero_button['hero_button_url'];
// $hero_image = get_field('hero_image');
// $hero_image_url = $hero_image['url'];
// $hero_image_alt = $hero_image['alt'];

?>

<!-- Hero Home Section Start --->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="hero-home">
        <div class="hero-home-content">
            <h4>Create Smart & <br> Stunning Forms to <br> Grow Your Leads</h4>
            <div class="hero-home-img">
                <img src="http://localhost/fluentforms/wp-content/uploads/2023/11/wp-rev.png" alt="">
                <img src="http://localhost/fluentforms/wp-content/uploads/2023/11/mn.png" alt="">
            </div>
            <a href="" class="btn-bg-primary">BUY NOW</a>
        </div>
        <div class="hero-home-right">
            <img src="http://localhost/fluentforms/wp-content/uploads/2023/11/home-hero.png" alt="">
        </div>
    </div>
</section>
<!-- Hero Section End -->	