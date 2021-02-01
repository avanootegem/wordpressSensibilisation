<?php

function pages($page) {
    $value = "";
    switch ($page) {
        case 1:
            $value = "difficultés";
        break;
        
        case 2:
            $value = "accueil";
        break;
        
        case 3:
            $value = "solutions";
        break;

        case 4:
            $value = "graphiques";
        break;

        default:
            $value = "ya un soucis";
        break;
    }

    return $value;
}

function montheme_support () {
    add_theme_support('title-tag');
}

function montheme_register_assets() {
    wp_register_style('reset', get_template_directory_uri() . '/reset.css', array(), '1.0', 'all');
    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_register_script('order', get_template_directory_uri() . '/js/order.js', array(), '1.0', 'all');
    wp_enqueue_style('reset');
    wp_enqueue_style('html5blank');
    wp_enqueue_script('order');
}

add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_register_assets');