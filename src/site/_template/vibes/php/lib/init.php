<?php
/**
 * Init the engine
 *
 * @package Unifato
 */

define('ABSPATH', dirname(dirname(__FILE__)) . '/');

// Globals -------------------------------------------------
$demos = array(
  'default' => array(
    'body_class' => '',
    'sidebar_file' => 'partials/sidebar',
    'nav_file' => 'partials/nav',
    'header_skin' => 'light',
  ),
  'skin-2' => array(
    'body_class' => '',
    'sidebar_file' => 'partials/sidebar',
    'nav_file' => 'partials/nav',
    'header_skin' => 'dark',
  ),
);

function activate_demo($name, $demo_array) {
  $GLOBALS['body_class'] = $demo_array[$name]['body_class'];
  $GLOBALS['sidebar_file'] = $demo_array[$name]['sidebar_file'];
  $GLOBALS['nav_file'] = $demo_array[$name]['nav_file'];
  $GLOBALS['header_skin'] = $demo_array[$name]['header_skin'];
}

$GLOBALS['body_classes'] = array();
$GLOBALS['enable_livereload'] = true;
$GLOBALS['enable_relative_nav'] = false;
$GLOBALS['disable_footer'] = false;
activate_demo( 'skin-2', $demos );

// Includes -------------------------------------------------
include_once 'functions.php';
include_once 'script-loader.php';
include_once 'template-tags.php';

// Vendors
$js = 'assets/js';
$css = 'assets/css';
$vendors = 'assets/vendors';
$node = 'node_modules';

// CSS
enqueue_google_font_files( array(
  'Prata' => array(400),
  'Poppins' => array(300,'300i',400,'400i',500,600),
  'PT Serif' => array('400i')
));

//enqueue_style( 'bootstrap', 'assets/css/bootstrap.css', 99 );
enqueue_style( 'feather-icons', $vendors . '/feather-icons/style.css');
enqueue_style( 'vibes-icons', $vendors . '/vibes-icons/style.css');
enqueue_style( 'unifato-icons', $vendors . '/unifato-icons/style.css');
enqueue_style( 'slick-slider', $vendors . '/slick-slider/slick.css');
register_style( 'openlayers', $vendors . '/openlayers/ol.css');
register_style( 'jquery-ui', $vendors . '/shop/jquery-ui.min.css');
register_style( 'magnific-popup', $vendors . '/magnific-popup/magnific-popup.css' );
enqueue_style( 'aos', $vendors . '/aos/aos.css');
enqueue_style( 'theme', $css . '/style.css', 99 );
enqueue_style( 'custom-styles', $css . '/custom.css', 99 );

// JS
enqueue_script( 'jquery', $vendors . '/jquery.min.js', 0 );
enqueue_script( 'bootstrap', $vendors . '/bootstrap/js/bootstrap.min.js', 99 );
enqueue_script( 'slick-slider', $vendors . '/slick-slider/slick.min.js', 99 );
enqueue_script( 'aos', $vendors . '/aos/aos.js' );
enqueue_script( 'sticky-kit', $vendors . '/stickybits/stickybits.min.js');
register_script( 'magnific-popup', $vendors . '/magnific-popup/magnific-popup.min.js' );
register_script( 'animejs', $vendors . '/animejs/anime.min.js' );
register_script( 'momentjs', $vendors . '/momentjs/moment.min.js' );
register_script( 'countdown', $vendors . '/jquery.countdown/jquery.countdown.min.js' );
register_script( 'countup', $vendors . '/countUp/countUp.js' );
register_script( 'jquery-ui-core', $vendors . '/shop/jquery-ui-core.min.js' );
register_script( 'jquery-ui-widget', $vendors . '/shop/jquery-ui-widget.min.js' );
register_script( 'jquery-ui-mouse', $vendors . '/shop/jquery-ui-mouse.min.js' );
register_script( 'jquery-ui-slider', $vendors . '/shop/jquery-ui-slider.min.js' );
register_script( 'openlayers', $vendors . '/openlayers/ol.js' );
register_script( 'spinner', $vendors . '/jquery-spinner/jquery-spinner.js' );
enqueue_script( 'js-cookie', $vendors . '/js-cookie/js.cookie.min.js' );
enqueue_script( 'lodash', $vendors . '/lodash/lodash.min.js' );
register_script( 'gmaps', $vendors . '/gmaps/gmaps.min.js' );
register_script( 'gmaps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCO9v3UBJDfOTFC_wcIK7UzhLRjBWQIJ9M' );
enqueue_script( 'theme', $js . '/template.js', 99);
enqueue_script( 'custom', $js . '/custom.js', 99 );

if( $GLOBALS['enable_livereload'] )
enqueue_script( 'livereload', 'http://localhost:35729/livereload.js', 99);
