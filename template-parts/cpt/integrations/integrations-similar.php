<?php 
    $post_id = get_the_ID();
    $integrations_similar_title = get_field('integrations_similar_title', $post_id);
    $integrations_similar = get_field('integrations_similar', $post_id);
?>

<section class="integration-similar-area">
    <div class="site-container">
        <h4 class="section-title"><?php echo $integrations_similar_title;?></h4>
        <div class="integrations-similar">
            <?php
                // Check if there are related posts
                if ($integrations_similar) {
                    // Loop through each related post
                    foreach ($integrations_similar as $similar) {
                        $similar_title = $similar->post_title;
                        $similar_image = get_field('integration_image', $similar->ID);
                        $similar_desc = get_field('integration_description', $similar->ID);
                    ?>
                        <div class="single-similar">
                            <h4><img src="<?php echo $similar_image;?>" alt="<?php echo $similar_title;?>"> <?php echo $similar_title;?></h4>
                            <p><?php echo $similar_desc;?></p>
                        </div>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
</section>