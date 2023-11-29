<?php 
    $forms_demo_used_fields_title = get_field('forms_demo_used_fields_title');
    $forms_demo_used_fields_description = get_field('forms_demo_used_fields_description');
    $forms_demo_used_fields = get_field('forms_demo_used_fields');
?>

<?php 
    if($forms_demo_used_fields) {
        ?>
            <section class="form-demos-used-fields-area">
                <div class="used-fields-container">
                    <h4 class="section-title"><?php echo esc_html($forms_demo_used_fields_title);?></h4>
                    <p><?php echo $forms_demo_used_fields_description;?></p>
                    <div class="form-demos-used-fields">
                    <?php 
                        foreach($forms_demo_used_fields as $field) {
                            $field_check = $field['free_pro'];
                            $field_icon = $field['forms_demo_used_field_icon'];
                            $field_text = $field['forms_demo_used_field_text'];
                            ?>
                                <div class="single-used-fileds">
                                    <span>
                                        <img src="<?php echo esc_url($field_icon);?>" alt="<?php echo esc_attr($field_text);?>">
                                        <?php echo esc_html($field_text);?>
                                    </span>
                                        <?php 
                                            if($field_check == 'pro') {
                                                ?>
                                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="15.5" cy="15.5" r="15" fill="white" stroke="#B2C6DE"/>
                                                        <path d="M18.0959 11.4065L18.0326 11.461L18.1471 11.4724L19.0953 12.6903L20.2628 11.6812L20.3766 11.6925L20.3262 11.6259L22.2867 9.93107C22.4121 9.82293 22.5674 9.75566 22.7321 9.73825C22.8967 9.72084 23.0627 9.75412 23.2078 9.83365C23.353 9.91317 23.4705 10.0351 23.5444 10.1832C23.6184 10.3313 23.6453 10.4985 23.6217 10.6623L22.4029 19.0691H9.24632L8.0089 10.7005C7.98432 10.5357 8.01096 10.3674 8.08523 10.2183C8.1595 10.0692 8.27779 9.94658 8.42409 9.86695C8.5704 9.78733 8.73764 9.75459 8.90316 9.77318C9.06869 9.79177 9.2245 9.86079 9.3495 9.97088L11.219 11.6162L11.1784 11.6649L11.267 11.6584L12.4402 12.6903L13.4249 11.4772L13.5135 11.4699L13.4648 11.4277L15.1962 9.29976C15.2733 9.20495 15.3708 9.12877 15.4815 9.07687C15.5921 9.02498 15.7131 8.99872 15.8353 9.00005C15.9575 9.00138 16.0778 9.03026 16.1873 9.08454C16.2968 9.13882 16.3927 9.21711 16.4677 9.31357L18.0959 11.4065ZM9.30969 19.8816H22.3095V20.6941C22.3095 20.9096 22.2239 21.1162 22.0715 21.2686C21.9192 21.421 21.7125 21.5066 21.497 21.5066H10.1222C9.90669 21.5066 9.70003 21.421 9.54766 21.2686C9.39529 21.1162 9.30969 20.9096 9.30969 20.6941V19.8816Z" fill="#FFA800"/>
                                                    </svg> 
                                                <?php 
                                            }
                                        ?>
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
