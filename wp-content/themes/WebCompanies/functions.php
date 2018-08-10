<?php

/**
 * WebCompanies functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WebCompanies
 */

/**
 * Enqueue scripts and styles.
 */
function webcompanies_enqueue_styles()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('core', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'webcompanies_enqueue_styles');

function webcompanies_enqueue_scripts()
{
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'webcompanies_enqueue_scripts');