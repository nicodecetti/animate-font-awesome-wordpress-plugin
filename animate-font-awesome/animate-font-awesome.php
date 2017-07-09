<?php
/**
 * Animate Font Awesome
 *
 * @package   Animate Font Awesome
 * @author    Domenico Camasta <domenico.camasta@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2017 Domenico Camasta
 *
 * @wordpress-plugin
 * Plugin Name:       Animate Font Awesome
 * Description:       Animated Font Awesome Icon for WordPress.
 * Version:           1.0.0
 * Author:            Domenico Camasta
 * Author URI:        domenico.camasta@gmail.com
 * License:           GPLv2+
 * Text Domain:       animate-font-awesome
 * Domain Path:       /languages
 * GitHub Plugin URI:
 */

function afa_enqueue_style() { 
   wp_enqueue_style( 'animate-font-awesome', plugins_url( '/css/font-awesome-animation.min.css') );
}
add_action('admin_enqueue_scripts', 'afa_enqueue_style' );
