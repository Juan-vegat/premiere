<!--primer loop -------------------------------------->
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
    'posts_per_page' => 2,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'PONER-CATEGORIA-AQUI',
        ),
    ),
);
$loop = new WP_Query($arg);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
?>
<!--contenido del loop ---->

<!--contenido del loop ---->
<?php
    endwhile;
endif;
wp_reset_postdata();
?>
<!--termina primer loop --------------------------------------->                     
                       

<!--SI SE QUIERE UTILIZAR MAS DE UN LOOP POR SECCION PASAR AL DE ABAJO Y COPIARLO CAMBIANDO EL NUMERO DE LAS VARIABLES-------------------->


<!--segundo loop ---------------------------------------------->
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
    'posts_per_page' => 2,
    'offset'         => 2,

    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'PONER-CATEGORIA-AQUI',
        ),
    ),
);
$loop = new WP_Query($arg);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
?>
<!--contenido del loop ---->

<!--contenido del loop ---->
<?php
    endwhile;
endif;
wp_reset_postdata();
?>
<!-- termina segundo loop -------------------------------------->