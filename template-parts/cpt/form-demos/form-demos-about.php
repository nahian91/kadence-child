<?php 
    $post_id = get_the_ID();
    $forms_demo_about_title = get_field('forms_demo_about_title', $post_id);
    $forms_demo_about_description = get_field('forms_demo_about_description', $post_id);
?>

<section class="form-demos-about-area">
    <div class="site-container">
        <div class="form-demos-about">
            <h4 class="section-title"><?php echo esc_html($forms_demo_about_title);?></h4>
            <p><?php echo esc_html($forms_demo_about_description);?></p>
        </div>
    </div>
</section>