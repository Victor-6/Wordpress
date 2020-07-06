<?php

/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts()
{
    wp_register_style('main-style', get_template_directory_uri() . '/blog.css', array(), true);
    wp_enqueue_style('main-style');
    wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

register_nav_menus(array(
    'menu-principal' => 'Menu principal'
));

function my_custom_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Custom', 'your-theme-domain'),
            'id' => 'custom-side-bar',
            'description' => __('Custom Sidebar', 'your-theme-domain'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'my_custom_sidebar');
