<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// CHARGEMENT STYLES ET SCRIPTS THEME ENFANT
function theme_enfant_enqueue_scripts() {
    // Charge le style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/sass/style.css', array('parent-style'));
    
    // Charge le script du thème enfant
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, true);

    // charge localement swiper
    wp_enqueue_script('swiper-script', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/sass/swiper-bundle.min.css');

    // Charger Skrollr en local
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), null, true);
    
    // Charger le fichier JavaScript personnalisé pour initialiser Skrollr
    wp_enqueue_script('parallax-init', get_stylesheet_directory_uri() . '/js/parallax-init.js', array('skrollr', 'jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'theme_enfant_enqueue_scripts');

