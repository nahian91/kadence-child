<?php 

    $forms_demo_features_title = get_field('forms_demo_features_title');
    $forms_demo_features = get_field('forms_demo_features');

    if($forms_demo_features){
        ?>
            <section class="single-form-features-area">
                <div class="site-container">
                    <h4 class="section-title"><?php echo esc_html($forms_demo_features_title);?></h4>
                    <div class="single-form-features">
                        <?php 
                            foreach($forms_demo_features as $feature) {
                                $feature_img = $feature['forms_demo_feature_image'];
                                $feature_title = $feature['forms_demo_feature_title'];
                                $feature_desc = $feature['forms_demo_feature_description'];
                                ?>
                                    <div class="single-form-feature-box">
                                        <img src="<?php echo esc_url($feature_img);?>" alt="<?php echo esc_attr($feature_title); ?>">
                                        <h4><?php echo esc_html($feature_title); ?></h4>
                                        <p><?php echo esc_html($feature_desc); ?></p>
                                    </div>
                                <?php 
                            }
                        ?>
                    </div>
                </div>
            </section>
        <?php 
    }
?>