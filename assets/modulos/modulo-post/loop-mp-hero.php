 <div id="carouselExampleIndicators" class="carousel slide">
     <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
             aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
             aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
             aria-label="Slide 3"></button>
     </div>

     <div class="carousel-inner hero">

         <!--primer loop -------------------------------------->
         <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
    'posts_per_page' => 1,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'categoria1',
        ),
    ),
);
$loop = new WP_Query($arg);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
?>
         <!--contenido del loop ---->
         <div class="carousel-item active">
             <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" class="d-block imagen" alt="...">
         </div>

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
    'posts_per_page' => 1,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'categoria1',
        ),
    ),
);
$loop = new WP_Query($arg);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
?>
         <!--contenido del loop ---->
         <div class="carousel-item">
             <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full')?>" class="d-block imagen" alt="...">
         </div>
         <!--contenido del loop ---->
         <?php
    endwhile;
endif;
wp_reset_postdata();
?>
         <!-- termina segundo loop -------------------------------------->


     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>