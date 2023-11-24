<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" <?php kadence()->print_microdata( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
/**
 * Kadence before wrapper hook.
 */
do_action( 'kadence_before_wrapper' );

$header_logo = get_field('logo', 'option');
$header_buttons = get_field('buttons', 'option');

?>
<div id="wrapper" class="site wp-site-blocks">
	
	<header class="site-header">
		<div class="site-container">
			<div class="header">
				<a href="<?php echo site_url(); ?>" class="logo">
					<?php 
						if($header_logo){
							?>
								<img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_url($header_logo['alt']); ?>">
							<?php 
						}
					?>
				</a>
				<?php 
                    if ( has_nav_menu( 'main_menu' ) ) {
                        wp_nav_menu( array( 'theme_location' => 'main_menu' ) );
                    }
                ?>
				<?php 
					if($header_buttons['button_url']) {
						?>
							<a href="<?php echo esc_url($header_buttons['button_url']); ?>" class="btn-bg-white"><?php echo $header_buttons['button_text']; ?></a>
						<?php 
					}
				?>
			</div>
		</div>
	</header>

	<div id="inner-wrap" class="wrap hfeed kt-clear">
		<?php
		/**
		 * Hook for top of inner wrap.
		 */
		do_action( 'kadence_before_content' );
		?>