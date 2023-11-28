<?php 
    $integration_features_title = get_field('integration_features_title');
    $integration_features_description = get_field('integration_features_description');
    $integration_features = get_field('integration_features');
?>

<!-- Integrations Feature Start --->
<section class="integrations-feature-area">
    <div class="site-container">
        <div class="section-title">
            <h4><?php echo $integration_features_title;?></h4>
            <p><?php echo $integration_features_description;?></p>
        </div>
        <div class="integrations-feature">            
            <?php 
                if($integration_features) {
                    foreach($integration_features as $feature) {
                        $integration_feature_icon = $feature['integration_feature_icon'];
                        $integration_feature_title = $feature['integration_feature_title'];
                        $integration_feature_description = $feature['integration_feature_description'];
                        ?>
                        <div class="single-integration-feature">
                            <img src="<?php echo esc_url($integration_feature_icon);?>" alt="<?php echo esc_attr($integration_feature_title);?>">
                            <h3><?php echo $integration_feature_title;?></h3>
                            <p><?php echo $integration_feature_description;?></p>
                        </div>
                        <?php 
                    }
                }
            ?>
        </div>
    </div>
</section>
<!-- Integrations Feature Section End -->	