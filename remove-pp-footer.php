<?php
/**
 * Plugin Name: ProPhoto Footer Remover
 * Description: Removes the ProPhoto Footer Attribution text. This cleans up your site from having site-wide footer links, which goes against Google's best practices, and can hurt you rankings. 
 * Version: 1.0
 * Author: William Bay of Flaunt Your Site
 * Author URI: http://flauntyoursite.com
 * License: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 * Contributors: bahia0019
 */



function remove_pp_footer() {
		wp_enqueue_style( 'fyc-styles', plugin_dir_url( __FILE__ ) . 'css/remove_pp_footer.css' );
	}
add_action( 'wp_enqueue_scripts', 'remove_pp_footer' );



function add_copyright_footer() { ?>

	<div class="footer-copyright"> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. </div>
<?php
}

add_action('wp_footer', 'add_copyright_footer');
