<?php
/**
* Plugin name: Slide IMG
* Plugin URL: https://www.caodem.com
* Description: Create photo slideshows for the website.
* Domain Path: /languages
* Version: 1.1
* Author: ihoan caodem.com
* Author URL: https://www.caodem.com
* License: GPLv3 or later
/**
* Create photo slideshows for the website.
*/
// add hook css slide img
function Slide_img_addcssjs_head() {
wp_enqueue_style( 'slideimg-css', plugins_url( 'css/slideimg-style.css', __FILE__ ), array(), '1.0');
wp_enqueue_script( 'zoomimg-js', plugins_url( 'js/slideimg-js.js', __FILE__ ), array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'Slide_img_addcssjs_head' );
// khoi tao bang cai dat
$slideimg_options = get_option('slideimg_settings');
// dua muc luc vao content
include( plugin_dir_path( __FILE__ ) . 'inc/slideimg-content.php');
// trinh quan ly admin
include( plugin_dir_path( __FILE__ ) . 'inc/slideimg-admin-page.php');
// the ngon ngu
function Slide_img_load_textdomain() {
  load_plugin_textdomain( 'slide-img', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'plugins_loaded', 'Slide_img_load_textdomain' );
