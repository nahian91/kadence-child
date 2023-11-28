<?php 
    $forms_demo_short_description = get_field('forms_demo_short_description');
    $forms_demo_preview_shortcode = get_field('forms_demo_preview_shortcode');
    $forms_demo_preview_button_1 = get_field('forms_demo_preview_button_1');
    $forms_demo_preview_button_1_text = $forms_demo_preview_button_1['forms_demo_preview_button_1_text'];
    $forms_demo_preview_button_1_url = $forms_demo_preview_button_1['forms_demo_preview_button_1_url'];
    $forms_demo_preview_button_2 = get_field('forms_demo_preview_button_2');
    $forms_demo_preview_button_2_text = $forms_demo_preview_button_2['forms_demo_preview_button_2_text'];
    $forms_demo_preview_button_2_url = $forms_demo_preview_button_2['forms_demo_preview_button_2_url'];
?>

<section class="form-demos-preview-area">
    <div class="form-demos-preview">
        <h2><?php the_title();?></h2>
        <p><?php echo $forms_demo_short_description;?></p>
        <div class="form-demos-preview-box">
            <div class="form-demos-preview-info">
                <h4><?php the_title();?></h4>
                <a href="<?php echo esc_url($forms_demo_preview_button_1_url);?>"><?php echo esc_html($forms_demo_preview_button_1_text);?></a>
            </div>
            <?php echo $forms_demo_preview_shortcode;?>
            <a href="<?php echo esc_url($forms_demo_preview_button_2_url);?>" class="preview-btn"><?php echo esc_html($forms_demo_preview_button_2_text);?></a>
        </div>
    </div>
</section>