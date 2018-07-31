<?php

function sailors_files()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Bowlby+One+SC');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.10/css/all.css');
    wp_enqueue_script('stickyNav', get_template_directory_uri() . '/src/js/stickynav.js', null, null, true);
    wp_enqueue_script('smoothScroll', get_template_directory_uri() . '/src/js/smooth-scroll.js', null, null, true);

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'sailors_files');

?>

<?php 
function slick_files()
{
    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_script('slick-init', get_template_directory_uri() . '/src/js/slick-init.js', array('jquery'), null, true);
    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', '', '1.8.1', null, false);
}

//* Enqueue Slick's CSS and Javascript
add_action('wp_enqueue_scripts', 'slick_files');
?>

<?php 
function google_files()
{
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyCXYl3TxEAXA_P-WPH0vTWeigW41eBgBBE&callback=initMap', null, null, true);
    wp_enqueue_script('googleMapConfig', get_template_directory_uri() . '/src/js/googlemaps.js', null, null, true);
}

//* Enqueue Slick's CSS and Javascript
add_action('wp_enqueue_scripts', 'google_files');
?>