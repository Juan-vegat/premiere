<?php 

function css_functions() {

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', 'all');
    wp_register_style('bootstrap-iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', 'all');
    wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', 'all');
    wp_register_style('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', 'all');
    wp_register_style('estilos-custom', get_template_directory_uri() . '/assets/librerias/css/style.css', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-iconos');
    wp_enqueue_style('swiper');
    wp_enqueue_style('aos');
    wp_enqueue_style('estilos-custom');
    

}
add_action('wp_enqueue_scripts', 'css_functions');


/*assets styles*/
