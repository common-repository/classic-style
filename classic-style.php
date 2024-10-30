<?php
/**
 * Classic Style
 * @author    Lenin Zapata <leninzapatap@gmail.com>
 * @link      https://leninzapata.com
 * @copyright 2019 Classic Style
 * @package   Classic Style
 *
 * @wordpress-plugin
 * Plugin Name: Classic Style
 * Plugin URI: https://wordpress.org/plugins/classic-style/
 * Author: Lenin Zapata
 * Author URI: https://leninzapata.com
 * Version: 0.1.1
 * Description: Classic Style is a plugin that allows you to return to the classic wordpress design, that is to say, buttons and Wordpress boxes that we were used to before.
 * Text Domain:
 * Domain Path: /languages
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// ─── Adds Stylesheet On Wp-Admin ────────
//add_action( 'wp_loaded', 'classic_add_stylesheet_to_admin', 0 );
add_action( 'wp_loaded', 'classic_add_stylesheet_to_login', 910000 );
function classic_add_stylesheet_to_admin() {
     // ─── Get data head plugin ────────
    $filedata = get_file_data( __FILE__ , array( 'Version', 'Text Domain' ) );
    wp_enqueue_style( 'wp-classic-style-5-2', plugins_url('style.css', __FILE__), 'themes', $filedata[0] );
}
function classic_add_stylesheet_to_login() {
     // ─── Get data head plugin ────────
     $filedata = get_file_data( __FILE__ , array( 'Version', 'Text Domain' ) );
    wp_enqueue_style( 'wp-classic-style-5-2-s', plugins_url('style.css', __FILE__), ['login'], $filedata[0] );
}