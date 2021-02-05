<?php

function pages($page) {
    $value = "";
    switch ($page) {
        case 1:
            $value = "footer";
        break;

        case 2:
            $value = "solutions";
        break;
        
        case 3:
            $value = "graphiques";
        break;
        
        case 4:
            $value = "difficultés";
        break;

        case 5:
            $value = "accueil";
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
    wp_register_style('reset', get_template_directory_uri() . '/reset.css', array(), null, 'all');
    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), null, 'all');
    wp_register_script('order', get_template_directory_uri() . '/js/order.js', array(), '1.3', 'all');
    wp_enqueue_style('reset');
    wp_enqueue_style('html5blank');
    wp_enqueue_script('order');
}

add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_register_assets');