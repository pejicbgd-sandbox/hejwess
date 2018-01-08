<?php
/*
Plugin Name: WP Text Slider Widget
Plugin URI: http://codeaffairs.com
Description: Simple and easy yo use text slider widget.
Version: 1.0
Author: Ugur CELIK
Author URI: info@codeaffairs.com
License: A "Slug" license name e.g. GPL2
*/



class wpTextSliiderWidget extends WP_Widget{
    public function __construct()
    {
        parent::__construct(false, 'Wp Text Slider');
        add_action('wp_enqueue_scripts',[$this,'registerJsFile']);
        add_action('wp_enqueue_scripts',[$this,'registerCssFile']);
        register_deactivation_hook(__FILE__,[$this,'beforeDeactivate']);
    }

    function widget( $args, $instance ) {
        $texts = json_decode(get_option('ca_wp_text_slider_texts'));
        echo '<div id="ca-wp-text">';
        foreach($texts as $text){
            echo '<div>'.$text.'</div>';
        }
        echo '</div>';
    }

    public function registerJsFile(){
        wp_enqueue_script('ca_wp_text_slider_js',plugins_url('js/wp-text-slider-widget.js',__FILE__),false);
    }

    public function registerCssFile(){
        wp_enqueue_style('ca_wp_text_slider_css',plugins_url('css/style.css',__FILE__),false);
    }

    public function beforeDeactivate(){
        delete_option('ca_wp_text_slider_texts');
    }
}

function register_wptextslider() {
    register_widget( 'wpTextSliiderWidget' );
}

add_action( 'widgets_init', 'register_wptextslider' );

include( plugin_dir_path( __FILE__ ) . 'admin/wp-text-slider-admin-page.php');

