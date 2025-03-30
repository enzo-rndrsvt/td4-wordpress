<?php

add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');
function astra_child_enqueue_styles() {
    wp_enqueue_style('astra', get_template_directory_uri() . '/style.css');

}


require_once get_stylesheet_directory() . '/cpt-portfolio.php';


add_action('init', 'create_projet_post_type');

add_theme_support('post-thumbnails');

?>

