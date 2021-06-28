<?php
add_action('wp_enqueue_scripts', 'wf_scripts');

function wf_scripts()
{
    wp_enqueue_style('wf-style', get_stylesheet_uri());

    wp_enqueue_style('normalize-style',
        get_template_directory_uri() . '/assets/css/normalize.css');

    wp_enqueue_script('wp-scripts',
        get_template_directory_uri() . '/assets/scripts/script.js', array(), null, true);
}

add_theme_support('custom-logo');


?>
