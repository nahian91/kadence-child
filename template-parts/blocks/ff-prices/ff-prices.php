<?php

/**
 * Prices Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'prices-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'prices';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

// $post_layout_title =  get_field('post_layout_title');
// $post_layout_button =  get_field('post_layout_button');
// $posts_select =  get_field('posts_select');

?>

<!-- Prices Section Start --->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-area">
    <div class="site-container">
        <div class="price-buttons">
            <div class="price-button" data-tab="annual">Annual</div>
            <div class="price-button" data-tab="standard">Lifetime</div>
        </div>

        <div class="prices">
            <div class="price-content" id="annual">
                <div class="single-price">
                    <div class="price-info">
                        <span>$50.00</span>
                        <h2>$11.00</h2>
                        <h4>Single Site License</h4>
                        <p>1 Domain License</p>
                    </div>
                    <a href="" class="price-btn">Buy Now</a>
                    <div class="priece-feature">
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Plugin Update</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Priority Support</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> All Features Included</span>
                    </div>
                </div>
                <div class="single-price active">
                    <div class="price-info">
                        <span>$50.00</span>
                        <h2>$22.00</h2>
                        <h4>Single Site License</h4>
                        <p>1 Domain License</p>
                    </div>
                    <a href="" class="price-btn">Buy Now</a>
                    <div class="priece-feature">
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check-active.png" alt=""> 1 Year Plugin Update</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check-active.png" alt=""> 1 Year Priority Support</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check-active.png" alt=""> All Features Included</span>
                    </div>
                </div>
                <div class="single-price">
                    <div class="price-info">
                        <span>$33.00</span>
                        <h2>$41.00</h2>
                        <h4>Single Site License</h4>
                        <p>1 Domain License</p>
                    </div>
                    <a href="" class="price-btn">Buy Now</a>
                    <div class="priece-feature">
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Plugin Update</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Priority Support</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> All Features Included</span>
                    </div>
                </div>
            </div>
            <div class="price-content" id="standard">
            <div class="single-price">
                    <div class="price-info">
                        <span>$50.00</span>
                        <h2>$41.00</h2>
                        <h4>Single Site License</h4>
                        <p>1 Domain License</p>
                    </div>
                    <a href="" class="price-btn">Buy Now</a>
                    <div class="priece-feature">
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Plugin Update</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Priority Support</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> All Features Included</span>
                    </div>
                </div>
                <div class="single-price active">
                    <div class="price-info">
                        <span>$50.00</span>
                        <h2>$41.00</h2>
                        <h4>Single Site License</h4>
                        <p>1 Domain License</p>
                    </div>
                    <a href="" class="price-btn">Buy Now</a>
                    <div class="priece-feature">
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check-active.png" alt=""> 1 Year Plugin Update</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check-active.png" alt=""> 1 Year Priority Support</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check-active.png" alt=""> All Features Included</span>
                    </div>
                </div>
                <div class="single-price">
                    <div class="price-info">
                        <span>$50.00</span>
                        <h2>$41.00</h2>
                        <h4>Single Site License</h4>
                        <p>1 Domain License</p>
                    </div>
                    <a href="" class="price-btn">Buy Now</a>
                    <div class="priece-feature">
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Plugin Update</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> 1 Year Priority Support</span>
                        <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/price-check.png" alt=""> All Features Included</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Prices Section End -->	