<?php
///*
//    Plugin Name: La Pizzeria - Location With Leaflet
//    Plugin URI:
//    Description: Location of the Pizzeria
//    Version: 1.0
//    Author: Ido Leybovitch
//    Text Domain: lapizzeria
//*/
//
//if(!defined('ABSPATH')) die();
//
//function lapizzeria_location_shortcode() {
//
//    $location = get_field('location');?>
<!---->
<!--    <div class="location">-->
<!--        <input type="hidden" id="lat" value="--><?php //echo $location['lat']; ?><!--" />-->
<!--        <input type="hidden" id="lng" value="--><?php //echo $location['lng']; ?><!--" />-->
<!--        <input type="hidden" id="address" value="--><?php //echo $location['address']; ?><!--" />-->
<!---->
<!--        <div id="map">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    --><?php
//}
//
//add_shortcode('lapizzeria_location', 'lapizzeria_location_shortcode');
//
//// Add Leaflet Scripts
//function lapizzeria_location_scripts() {
//
//    if(is_page('home')):
//        // leaflet css
//        wp_enqueue_style('leafletcss', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.5.1');
//
//        //leaflet js
//        wp_enqueue_script('leafletjs', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.5.1', true);
//
//        //lapizzeria leaflet
//        wp_enqueue_script('lapizzeria-leaflet', plugins_url('/js/lapizzeria-leaflet.js' , __FILE__), array('leafletjs'), '1.0.0', true);
//
//    endif;
//}
//
//add_action('wp_enqueue_scripts', 'lapizzeria_location_scripts');
//
