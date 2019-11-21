<?php
/**
 * Plugin Name:       ACC
 * Plugin URI:        
 * Description:       Avoid Content Copying
 * Version:           1.0
 * Author:            @trblmkr
 * Author URI:        https://github.com/cdmkr
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       3ef-acc
 * Domain Path:       /languages
 */

if(!function_exists('acc_avoid_copy_init')){
    function acc_avoid_copy_init(){
        add_action( 'wp_enqueue_scripts', 'acc_add_scripts' );
        add_filter( 'body_class','acc_add_custom_body_attributes', 999 );
    }
}


if(!function_exists('acc_add_custom_body_attributes')){
    function acc_add_custom_body_attributes( $classes ){
	
        $classes[] = '" onkeypress="return catchControlKeys(event)';
        return $classes;
    
    }
}


if(!function_exists('acc_add_scripts')){
    function acc_add_scripts() {
        wp_enqueue_script( 'acc_script', plugin_dir_url( __FILE__ ) . 'public/js/index.js', array( 'jquery' ), 1, false );
    }
}

// init 
add_action('init', 'acc_avoid_copy_init');