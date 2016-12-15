<?php
//Add Web Agency Script
function colorbox_js()
{
    wp_register_script( 'colorbox', plugins_url( '/colorbox-master/jquery.colorbox.js', __FILE__ ) );
    wp_enqueue_script( 'colorbox' );
        
        wp_register_script( 'custom-script', plugins_url( '/script.js', __FILE__ ) );
    wp_enqueue_script( 'custom-script' );
        
}
add_action( 'wp_enqueue_scripts', 'colorbox_js', 20, 1);
function waw_styles_with_the_lot()
{
    // Register the style like this for a plugin:
    wp_register_style( 'custom-style', plugins_url( '/colorbox-master/example1/colorbox.css', __FILE__ ), array(), '20120208', 'all' );
    // or
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style' );
}
add_action( 'wp_enqueue_scripts', 'waw_styles_with_the_lot' );
?>
