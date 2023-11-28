<?php 
    $integration_hero_title = get_field('integration_hero_title');
    $integration_hero_description = get_field('integration_hero_description');
    $integration_hero_buttons = get_field('integration_hero_buttons');
    $integration_hero_button_1_url = $integration_hero_buttons['integration_hero_button_1_url'];
    $integration_hero_button_1_text = $integration_hero_buttons['integration_hero_button_1_text'];
    $integration_hero_button_2_url = $integration_hero_buttons['integration_hero_button_2_url'];
    $integration_hero_button_2_text = $integration_hero_buttons['integration_hero_button_2_text'];
    $integration_hero_image = get_field('integration_hero_image');
?>

<!-- Hero Section Start --->
<section class="integrations-hero-area">
    <div class="site-container">
        <div class="integrations-hero">
            <div class="hero-content">
                <span>                    
                    <a href="">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM16 7L0.999999 7V9L16 9V7Z" fill="#273050"/>
                        </svg>
                    </a>
                     All Integrations
                </span>
                <h4><?php echo $integration_hero_title;?></h4>
                <p><?php echo $integration_hero_description;?></p>
                <div class="integrations-hero-btn">
                    <a href="<?php echo esc_url($integration_hero_button_1_url);?>"><?php echo $integration_hero_button_1_text;?></a>
                    <a href="<?php echo esc_url($integration_hero_button_2_url);?>"><?php echo $integration_hero_button_2_text;?></a>
                </div>
            </div>
            <div class="integrations-img">
                <img src="<?php echo esc_url($integration_hero_image); ?>" alt="<?php echo esc_attr($integration_hero_title);?>">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->	