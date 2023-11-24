<?php

/**
 * Hero Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$hero_title =  get_field('hero_title');
$hero_description =  get_field('hero_description');
$hero_button =  get_field('hero_button');
$hero_button_label = $hero_button['hero_button_label'];
$hero_button_url = $hero_button['hero_button_url'];
$hero_image = get_field('hero_image');
$hero_image_url = $hero_image['url'];
$hero_image_alt = $hero_image['alt'];

?>

<!-- Hero Section Start --->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="site-container">
        <div class="hero">	
            <div class="hero-content">
                <h4><?php echo $hero_title; ?></h4>
                <p><?php echo $hero_description; ?></p>
                <?php 
                    if($hero_button_url) {
                        ?>
                            <a href="<?php echo $hero_button_url; ?>" class="btn-bg-primary"><?php echo $hero_button_label; ?></a>
                        <?php
                    }
                ?>
            </div>
            <img src="<?php echo $hero_image_url; ?>" alt="<?php echo $hero_image_alt; ?>" class="hero-img">
        </div>
    </div>
</section>
<!-- Hero Section End -->	