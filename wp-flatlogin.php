<?php
/**
* Plugin Name: WP Flat Login
* Plugin URI: https://github.com/guilhermevini/WP-FlatLogin
* Description: A simple and beautify login page with flat design style.
* Version: 1.0.0
* Author: Guilherme Vinicius
* Author URI: http://guilhermevini.com
* License: GPL2
*/

function my_login_stylesheet() {

    wp_register_style( 'animate', plugin_dir_url( __FILE__ ) . 'css/animate.css', array(), '3.2.5', 'screen' );
    wp_register_script( 'md5', plugin_dir_url( __FILE__ ) . 'js/md5-min.js', false, '2.2', true);


    wp_enqueue_style( 'login-style', plugin_dir_url( __FILE__ ) . 'css/login-style.css', array('animate'), '1.0', false );
    wp_enqueue_script( 'login-style-engine', plugin_dir_url( __FILE__ ) . 'js/login-style-engine.js', array( 'md5', 'jquery' ), '1.0', true );
}

add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

?>
