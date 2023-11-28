<?php 
    $integration_image_box_title = get_field('integration_image_box_title');
    $integration_image_box_description = get_field('integration_image_box_description');
    $integration_image_box_row = get_field('integration_image_box_row');
    $integration_image_box_row_sub_title = $integration_image_box_row['integration_image_box_row_sub_title'];
    $integration_image_box_row_title = $integration_image_box_row['integration_image_box_row_title'];
    $integration_image_box_row_description = $integration_image_box_row['integration_image_box_row_description'];
    $integration_image_box_row_image = $integration_image_box_row['integration_image_box_row_image'];
    $integration_image_box_column = get_field('integration_image_box_column');
?>

<!-- Integrations Image Box Section Start --->
<section class="integrations-image-box-area">
    <div class="site-container">
        <div class="section-title">
            <h4><?php echo $integration_image_box_title;?></h4>
            <p><?php echo $integration_image_box_description;?></p>
        </div>
        <div class="integrations-image-box-row">
            <div class="integrations-image-box-row-content">
                <span><?php echo $integration_image_box_row_sub_title;?></span>
                <h3><?php echo $integration_image_box_row_title;?></h3>
                <p><?php echo $integration_image_box_row_description;?></p>
            </div>
            <div class="integrations-image-box-row-img">
                <img src="<?php echo $integration_image_box_row_image;?>" alt="<?php echo $integration_image_box_row_title;?>">
            </div>            
        </div>
        <div class="integrations-image-box-column">
            <?php 
                if($integration_image_box_column) {
                    foreach($integration_image_box_column as $column) {
                        $integration_image_box_column_title = $column['integration_image_box_column_title'];
                        $integration_image_box_column_description = $column['integration_image_box_column_description'];
                        $integration_image_box_column_image = $column['integration_image_box_column_image'];
                        ?>
                            <div class="single-integration-box-column">
                                <h3><?php echo $integration_image_box_column_title;?></h3>
                                <p><?php echo $integration_image_box_column_description;?></p>
                                <img src="<?php echo $integration_image_box_column_image;?>" alt="<?php echo $integration_image_box_column_title;?>">
                            </div>
                        <?php 
                    }
                }
            ?>
        </div>
    </div>
</section>
<!-- Integrations Image Box Section End -->	