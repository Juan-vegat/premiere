<?php
add_filter( 'use_widgets_block_editor', '__return_false' );

function zona_widget()
{
register_sidebar(
    array(
        'name' => 'footer 1',
        'id' => 'footer_1',
        'before_widget' => '<div id="%1$s" class="widget estilo-about">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mb-4">',
        'after_title' => '</h3>',
    ));

register_sidebar(
    array(
        'name' => 'footer 2',
        'id' => 'footer_2',
        'before_widget' => '<div id="%1$s" class="widget estilo-social">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="">',
        'after_title' => '</h3>',
    ));

register_sidebar(
    array(
        'name' => 'footer 3',
        'id' => 'footer_3',
        'before_widget' => '<div id="%1$s" class="widget estilo-company">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mb-4">',
        'after_title' => '</h3>',
    ));

register_sidebar(
    array(
        'name' => 'footer 4',
        'id' => 'footer_4',
        'before_widget' => '<div id="%1$s" class="widget estilo-entradas">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mb-4">',
        'after_title' => '</h3>',
    ));

}
add_action('widgets_init', 'zona_widget');