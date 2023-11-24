<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook for bottom of inner wrap.
 */
do_action( 'kadence_after_content' );

$footer_about = get_field('footer_about', 'option');
$footer_logo = $footer_about['footer_logo']['url'];
$footer_description = $footer_about['footer_description'];
$footer_form = $footer_about['footer_form'];
$footer_socials = $footer_about['footer_socials'];
$footer_menu_title = get_field('footer_menu_title', 'option');
$footer_menu_title1 = $footer_menu_title['footer_menu_1_title'];
$footer_menu_title2 = $footer_menu_title['footer_menu_2_title'];
$footer_menu_title3 = $footer_menu_title['footer_menu_3_title'];
$footer_menu_title4 = $footer_menu_title['footer_menu_4_title'];
$footer_menu_title5 = $footer_menu_title['footer_menu_5_title'];
?>

</div><!-- #inner-wrap -->
    <footer class="site-footer-area">
        <div class="site-container">
            <div class="footer">
                <div class="footer-about">
                    <?php 
                        if($footer_logo) {
                            ?>
                                <img src="<?php echo esc_url($footer_logo); ?>" alt="">
                            <?php
                        }
                    ?>
                    <p><?php echo $footer_description;?></p>
                    <?php echo $footer_form;?>
                    <span>We won't send you spam. <br>Unsubscribe at any time.</span>
                    <div class="footer-social">
                        <?php  
                            if($footer_socials) {
                                foreach($footer_socials as $social) {
                                    ?>                                    
                                        <a href="<?php echo $social['footer_social_url']; ?>"><img src="<?php echo $social['footer_social_icon']['url']; ?>" alt=""></a>
                                    <?php
                                }
                                ?>
                                    
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="single-footer">
                    <?php 
                        if($footer_menu_title1) {
                            ?> <h4><?php echo $footer_menu_title1;?></h4> <?php
                        }
                    ?>                    
                    <?php 
                        if ( has_nav_menu( 'footer_1' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'footer_1' ) );
                        }
                    ?>
                </div>
                <div class="single-footer">
                    <?php 
                        if($footer_menu_title2) {
                            ?> <h4><?php echo $footer_menu_title2;?></h4> <?php
                        }
                    ?>     
                    <?php 
                        if ( has_nav_menu( 'footer_2' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'footer_2' ) );
                        }
                    ?>
                </div>
                <div class="single-footer">
                    <?php 
                        if($footer_menu_title3) {
                            ?> <h4><?php echo $footer_menu_title3;?></h4> <?php
                        }
                    ?>     
                    <?php 
                        if ( has_nav_menu( 'footer_3' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'footer_3' ) );
                        }
                    ?>
                </div>
                <div class="single-footer">
                    <?php 
                        if($footer_menu_title4) {
                            ?> <h4><?php echo $footer_menu_title4;?></h4> <?php
                        }
                    ?>     
                    <?php 
                        if ( has_nav_menu( 'footer_4' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'footer_4' ) );
                        }
                    ?>
                </div>
                <div class="single-footer">
                    <?php 
                        if($footer_menu_title5) {
                            ?> <h4><?php echo $footer_menu_title5;?></h4> <?php
                        }
                    ?>     
                    <?php 
                        if ( has_nav_menu( 'footer_5' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'footer_5' ) );
                        }
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <section class="footer-bottom-area">
        <div class="site-container">
            <div class="footer-bottom">
                <p>Copyright © 2023 <a href="">Fluent Forms</a>. A Brand of <a href="">WPManageNinja™</a></p>
                <?php 
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu( array( 'theme_location' => 'footer_menu' ) );
                    }
                ?>
            </div>
        </div>
    </section>
</div><!-- #wrapper -->
<?php do_action( 'kadence_after_wrapper' ); ?>

<?php wp_footer(); ?>
</body>
</html>
