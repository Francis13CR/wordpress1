<?php

add_action('init', 'custom_post_3d_model');

//Para agregar menús personalizados
function register_menus(){
    register_nav_menus([
        'menu_principal' => __('Main menu'),
        'menu_secundario' => __('Secondary menu'),
    ]);
}
add_action('init','register_menus');


//Para agregar librerias
function my_libraries(){
    wp_enqueue_style('slicknav_styles','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/slicknav.min.css',[],'1.0.0',true);
    wp_enqueue_script('slicknav_script','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.js',[],'1.0.0',true);
    wp_enqueue_script('scripts',get_stylesheet_directory_uri().'/assets/js/scripts.js',['jquery', 'slicknav_script'],'1.0.0',true);
}
add_action('wp_enqueue_scripts','my_libraries');


//Para agregar posts personalizados
function custom_post_3d_model() {

    register_post_type( '3d-models',
      array( 'labels' => array(
        'name' => __( '3D Models', 'hestia' ),
        'singular_name' => __( '3D Model', 'hestia' ), /* El título en singular */
        'all_items' => __( 'All 3d models', 'hestia' ), /* Todos los items del menú */
        'add_new_item' => __( 'Add new 3d model', 'hestia' ), /* Agregar nuevo con título */
        'edit' => __( 'Edit', 'hestia' ), /* Editar */
        'edit_item' => __( 'Edit 3d model', 'hestia' ), /* Editar item */
        'new_item' => __( 'New 3d model', 'hestia' ), /* Nuevo titulo en visualización */
        'view_item' => __( 'Watch 3d model', 'hestia' ), /* Ver item */
        'search_items' => __( 'Search 3d model', 'hestia' ), /* Buscar item */
        'not_found' => __( 'Results not found', 'hestia' ), /* Se muestra si aún no hay entradas */
        'not_found_in_trash' => __( 'Results not found in trash', 'hestia' ), /* Se muestra si no hay nada en la papelera */
        ), /* end of arrays */
        'description' => __( 'This is a 3d model post type', 'hestia' ), /* Custom Type Description */
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8, /* Este es el orden en que aparecerán en el menu de admin */
        'menu_icon' => 'dashicons-smiley', /* El icono para el menu de admin */
        // Lo podemos agregar por medio de url o desde https://developer.wordpress.org/resource/dashicons
        'rewrite' => array( 'slug' => '3d-model', 'with_front' => false ), /* Se especifica el slug de la url, por lo general es el mismo post type 'extra' */
        'has_archive' => '3d-model', /* Puede cambiar el nombre del slug */
        'capability_type' => 'post',
        'hierarchical' => false,
        /* Habilitamos ciertos parámetros para el editor de cada 3d-model */
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* Fin de las opciones */
      ); /* Fin del registro post type */
    }
    // Agregando la función al init de WordPress
    add_action( 'init', 'custom_post_3d_model');