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

?>

<!-- Integration Start Here  -->
<section class="integrations-area">
    <div class="site-container">
        <div class="forms-demo">
            <div class="forms-demo-category">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'kadence'); ?></span>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'kadence'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.7473 16.4825L14.4102 13.17C15.7056 11.5537 16.3329 9.50215 16.1631 7.43721C15.9934 5.37227 15.0396 3.45088 13.4978 2.06813C11.9559 0.685379 9.94333 -0.0536394 7.87376 0.00303437C5.80419 0.0597081 3.83498 0.907766 2.37103 2.37283C0.907077 3.83789 0.0596628 5.8086 0.00303206 7.87974C-0.0535986 9.95088 0.684859 11.965 2.06656 13.508C3.44826 15.051 5.36819 16.0056 7.43156 16.1754C9.49493 16.3453 11.5449 15.7175 13.16 14.4212L16.47 17.7337C16.5536 17.8181 16.6531 17.8851 16.7627 17.9308C16.8723 17.9765 16.9899 18 17.1086 18C17.2274 18 17.3449 17.9765 17.4546 17.9308C17.5642 17.8851 17.6636 17.8181 17.7473 17.7337C17.9094 17.5659 18 17.3416 18 17.1081C18 16.8747 17.9094 16.6504 17.7473 16.4825ZM8.11399 14.4212C6.8687 14.4212 5.65139 14.0516 4.61597 13.3593C3.58056 12.6669 2.77355 11.6828 2.297 10.5315C1.82045 9.38009 1.69577 8.11316 1.93871 6.89088C2.18165 5.6686 2.78131 4.54586 3.66186 3.66464C4.54241 2.78343 5.66429 2.18331 6.88565 1.94018C8.107 1.69706 9.37297 1.82184 10.5235 2.29875C11.674 2.77566 12.6573 3.58328 13.3491 4.61948C14.041 5.65568 14.4102 6.87392 14.4102 8.12015C14.4102 9.79129 13.7469 11.394 12.5661 12.5757C11.3853 13.7573 9.78386 14.4212 8.11399 14.4212Z" fill="#273050"/>
</svg> 
                    </button>
                </form>
                <h4><?php echo esc_html('Categories', 'kadence');?></h4>
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
                                        <a href="<?php the_permalink();?>" class="single-integration-box">
                                            <img src="<?php echo esc_url($integration_image);?>" alt="">
                                            <h4><?php echo esc_html($integration_title);?></h4>
                                            <p><?php echo esc_html($integration_description);?></p>
                                        </a>
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
<!-- Integration End Here  -->	