<div class="categoria">
    <h2>categoria 2</h2>
    <div class="carousel-container" id="carousel2">
      <button class="carousel-btn prev" onclick="moveCarousel('carousel2', -1)">‹</button>
      <div class="carousel-track" id="track1">

<!--primer loop -------------------------------------->
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'ASC',
    'paged'          => $paged,
    'posts_per_page' => 10,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'categoria2',
        ),
    ),
);
$loop = new WP_Query($arg);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
?>
<!--contenido del loop ---->
        <a class="movie-card" href="<?php the_permalink();?>">
            <img src=<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>>
            <h3 class="title"><?php echo get_the_title();?></h3>
        </a>
<!--contenido del loop ---->
<?php
    endwhile;
endif;
wp_reset_postdata();
?>
<!--termina primer loop --------------------------------------->                     
      
    </div>
      <button class="carousel-btn next" onclick="moveCarousel('carousel2', 1)">›</button>
    </div>
  </div>

  <script>
    function moveCarousel(containerId, direction) {
      const container = document.getElementById(containerId);
      const track = container.querySelector('.carousel-track');
      const cards = track.querySelectorAll('.movie-card');
      
      if (cards.length === 0) return;

      const cardWidth = cards[0].offsetWidth + 10;
      const itemsPerView = Math.floor(track.parentElement.offsetWidth / cardWidth);
      const totalItems = cards.length;
      const maxIndex = Math.ceil(totalItems / itemsPerView) - 1;
      
      let currentIndex = parseInt(track.dataset.currentIndex) || 0;
   
      let newIndex = currentIndex + direction;
      if (newIndex < 0) newIndex = 0;
      if (newIndex > maxIndex) newIndex = maxIndex;

      const offset = newIndex * itemsPerView * cardWidth;
      track.style.transform = `translateX(-${offset}px)`;
      track.dataset.currentIndex = newIndex;
    }

    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.carousel-container').forEach(container => {
        const track = container.querySelector('.carousel-track');
        track.dataset.currentIndex = 0;
      });
    });
  </script>