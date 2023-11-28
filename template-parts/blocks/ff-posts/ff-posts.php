<?php

/**
 * Posts Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'posts-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'posts';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$post_layout_title =  get_field('post_layout_title');
$post_layout_button =  get_field('post_layout_button');
$posts_select =  get_field('posts_select');

?>

<!-- Posts Section Start --->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="site-container">
        <div class="post-header">
            <h4><?php echo $post_layout_title;?></h4>
            <a href=""><?php echo esc_html('View All', 'kadence'); ?> 
                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5303 6.53033C13.8232 6.23744 13.8232 5.76256 13.5303 5.46967L8.75736 0.696698C8.46447 0.403805 7.98959 0.403805 7.6967 0.696698C7.40381 0.989592 7.40381 1.46447 7.6967 1.75736L11.9393 6L7.6967 10.2426C7.40381 10.5355 7.40381 11.0104 7.6967 11.3033C7.98959 11.5962 8.46447 11.5962 8.75736 11.3033L13.5303 6.53033ZM6.55671e-08 6.75L13 6.75L13 5.25L-6.55671e-08 5.25L6.55671e-08 6.75Z" fill="#324CF5"/>
                </svg>
            </a>
        </div>
        <div class="post-layout">
            <?php 
                if($posts_select) {
                    foreach($posts_select as $post) {
                        $category = get_the_category($post->ID);
                            foreach ($category as $cat) {
                                $cat_link = get_category_link($cat->term_id);
                            }
                        ?>
                            <div class="single-post">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'large' )); ?>" alt="<?php echo esc_attr($post->post_title);?>">
                                <span><a href="<?php echo esc_url($cat_link);?>"><?php echo esc_html($cat->name);?></a></span>
                                <h4><a href="<?php echo esc_url(get_the_permalink( $post->ID ));?>"><?php echo esc_html($post->post_title);?></a></h4>
                                <p><?php echo get_the_date('F d, Y', $post->ID); ?></p>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</section>
<!-- Posts Section End -->	