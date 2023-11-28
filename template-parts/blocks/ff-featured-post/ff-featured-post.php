<?php

/**
 * Featured Post Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'featured-post-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-post';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$featured_post =  get_field('featured_post');
$category = get_the_category($featured_post->ID);
    foreach ($category as $cat) {
    $cat_link = get_category_link($cat->term_id);
}
$excerpt = get_the_excerpt();
$featured_image_url = get_the_post_thumbnail_url($featured_post->ID, 'medium');

?>

<!-- Featured Post Section Start --->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="site-container">
        <div class="featured-post">
            <div class="featured-post-content">
                <span><a href="<?php echo esc_url($cat_link);?>"><?php echo esc_html($cat->name);?></a></span>
                <h4><a href="<?php echo esc_url(get_the_permalink( $featured_post->ID ));?>"><?php echo esc_html($featured_post->post_title);?></a></h4>
                <p><?php echo esc_html($featured_post->post_excerpt);?></p>
            </div>
            <div class="featured-post-img">
                <img src="<?php echo esc_url($featured_image_url);?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Featured Post Section End -->	