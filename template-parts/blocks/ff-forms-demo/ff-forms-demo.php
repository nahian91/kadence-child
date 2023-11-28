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

?>

<section class="forms-demo-area">
    <div class="forms-demo">
        <div class="forms-demo-category">
            <h4><?php  echo esc_html('Categories', 'kadence');?></h4>
            <?php
                $categories = get_terms(array(
                    'taxonomy' => 'forms-demo-category',
                    'hide_empty' => true,                    
                ));

                if (!is_wp_error($categories) && !empty($categories)) {
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
                    'posts_per_page' => 12,
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
                                $post_id = get_the_ID();
                                $forms_demo_short_description = get_field('forms_demo_short_description', $post_id);
                                ?>
                                    <div class="single-forms-demo-content">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                                        <div class="single-forms-demo-text">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php echo esc_html($forms_demo_short_description);?></p>
                                            <a href="<?php the_permalink();?>"><?php echo esc_html('View Demo', 'kadence'); ?> <svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.3034 3.89367C10.4801 3.71697 10.4801 3.43049 10.3034 3.25379L7.42401 0.374362C7.24732 0.197665 6.96083 0.197665 6.78414 0.374362C6.60744 0.551058 6.60744 0.837539 6.78414 1.01424L9.34363 3.57373L6.78414 6.13323C6.60744 6.30992 6.60744 6.5964 6.78414 6.7731C6.96083 6.9498 7.24732 6.9498 7.42401 6.7731L10.3034 3.89367ZM0.934326 4.02619H9.98351V3.12127H0.934326V4.02619Z" fill="white"/>
                                                </svg> 
                                            </a>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                            // Output pagination links
                            echo '<div class="pagination">';
                            echo paginate_links(array(
                                'base'      => get_pagenum_link(1) . '%_%',
                                'format'    => 'page/%#%',
                                'current'   => max(1, get_query_var('paged')),
                                'total'     => $custom_query->max_num_pages,
                                'prev_text' => '&laquo; Previous',
                                'next_text' => 'Next &raquo;',
                            ));
                            echo '</div>';
                            wp_reset_postdata(); 
                        }
                        ?>
                    </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>