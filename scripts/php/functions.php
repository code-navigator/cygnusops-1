<?php
/**
 * Register and enqueue scripts
 * 
 */
function cygnusops_scripts() {
  wp_enqueue_style(
    'cygnusops-stylesheet',
    get_template_directory_uri() . 'style.css', array(),
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', 'cygnusops_scripts');