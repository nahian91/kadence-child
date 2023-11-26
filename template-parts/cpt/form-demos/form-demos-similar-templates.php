<?php 
    $forms_demo_short_description =  get_field('forms_demo_short_description');
    $forms_demo_similar_templates_title = get_field('forms_demo_similar_templates_title');
    $forms_demo_similar_templates = get_field('forms_demo_similar_templates');
?>

<section class="form-demos-similar-templates-area">
    <div class="site-container">
        <h4 class="section-title"><?php echo $forms_demo_similar_templates_title; ?></h4>
        <div class="similar-templates">
            <?php 
                if($forms_demo_similar_templates) {
                    foreach($forms_demo_similar_templates as $template) {
                        $template_img = get_the_post_thumbnail_url( $template->ID, 'medium' );
                        $template_title = $template->post_title;
                        ?>
                            <div class="single-forms-demo-content">
                                <img src="<?php echo esc_url($template_img);?>" alt="<?php echo esc_html($template_title); ?>">
                                <div class="single-forms-demo-text">
                                    <h4><?php echo esc_html($template_title); ?></h4>
                                    <p><?php echo $forms_demo_short_description;?></p>
                                    <a href="<?php the_permalink();?>">View Demo <svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3034 3.89367C10.4801 3.71697 10.4801 3.43049 10.3034 3.25379L7.42401 0.374362C7.24732 0.197665 6.96083 0.197665 6.78414 0.374362C6.60744 0.551058 6.60744 0.837539 6.78414 1.01424L9.34363 3.57373L6.78414 6.13323C6.60744 6.30992 6.60744 6.5964 6.78414 6.7731C6.96083 6.9498 7.24732 6.9498 7.42401 6.7731L10.3034 3.89367ZM0.934326 4.02619H9.98351V3.12127H0.934326V4.02619Z" fill="white"/>
                                        </svg> 
                                    </a>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                    <?php 
                }
            ?>
        </div>
    </div>
</section>