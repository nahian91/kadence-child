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