<?php
function registrar_cpt_video() {

    $label = array(
        'name'                  => 'video',
        'singular_name'         => 'video',
        'menu_name'             => 'video',
        'name_admin_bar'        => 'video',
        'add_new'               => 'Añadir nuevo',
        'add_new_item'          => 'Añadir nueva video',
        'new_item'              => 'Nuevo video',
        'edit_item'             => 'Editar video',
        'view_item'             => 'Ver video',
        'all_items'             => 'Todas las video',
        'search_items'          => 'Buscar video',
        'not_found'             => 'No se encontraron video',
        'not_found_in_trash'    => 'No se encontraron video en la papelera',
        'featured_image'        => 'Imagen destacada',
        'set_featured_image'    => 'Asignar imagen destacada',
        'remove_featured_image' => 'Quitar imagen destacada',
        'use_featured_image'    => 'Usar como imagen destacada',
    );

    $arg = array(
        'labels'             => $label,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-format-video',
        'rewrite'            => array('slug' => 'video'),
        'show_in_rest'       => true,
        'supports'           => array( 'title','editor', 'excerpt', 'thumbnail', 'page-attributes'),
        'menu_position'      => 6,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
    );

    register_post_type('video', $arg);
}
add_action('init', 'registrar_cpt_video');


function registrar_taxonomia_categoria_video() {
    $labels = array(
        'name'                       => 'Categorías de Video',
        'singular_name'              => 'Categoría de Video',
        'search_items'               => 'Buscar Categorías',
        'popular_items'              => 'Categorías Populares',
        'all_items'                  => 'Todas las Categorías',
        'parent_item'                => 'Categoría Padre',
        'parent_item_colon'          => 'Categoría Padre:',
        'edit_item'                  => 'Editar Categoría',
        'update_item'                => 'Actualizar Categoría',
        'add_new_item'               => 'Añadir Nueva Categoría',
        'new_item_name'              => 'Nombre de la Nueva Categoría',
        'separate_items_with_commas' => 'Separa las categorías con comas',
        'add_or_remove_items'        => 'Añadir o quitar categorías',
        'choose_from_most_used'      => 'Elige de las categorías más usadas',
        'not_found'                  => 'No se encontraron categorías',
        'menu_name'                  => 'Categorías de Video',
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'categoria-video'),
        'show_in_rest'          => true,
        'public'                => true,
        'show_in_nav_menus'     => true,
    );

    register_taxonomy('categoria_video', array('video'), $args);
}
add_action('init', 'registrar_taxonomia_categoria_video', 0);


function registrar_taxonomia_etiqueta_video() {
    $labels = array(
        'name'                       => 'Etiquetas de Video',
        'singular_name'              => 'Etiqueta de Video',
        'search_items'               => 'Buscar Etiquetas',
        'popular_items'              => 'Etiquetas Populares',
        'all_items'                  => 'Todas las Etiquetas',
        'edit_item'                  => 'Editar Etiqueta',
        'update_item'                => 'Actualizar Etiqueta',
        'add_new_item'               => 'Añadir Nueva Etiqueta',
        'new_item_name'              => 'Nombre de la Nueva Etiqueta',
        'separate_items_with_commas' => 'Separa las etiquetas con comas',
        'add_or_remove_items'        => 'Añadir o quitar etiquetas',
        'choose_from_most_used'      => 'Elige de las etiquetas más usadas',
        'not_found'                  => 'No se encontraron etiquetas',
        'menu_name'                  => 'Etiquetas de Video',
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'etiqueta-video'),
        'show_in_rest'          => true,
        'public'                => true,
        'show_in_nav_menus'     => true,
    );

    register_taxonomy('etiqueta_video', array('video'), $args);
}
add_action('init', 'registrar_taxonomia_etiqueta_video', 0);