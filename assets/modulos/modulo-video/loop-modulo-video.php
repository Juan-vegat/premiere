<?php if (get_field('video')) : ?>
    <div class="video-container">
        <?php the_field('video'); ?>
    </div>
<?php endif; ?>

<?php if (get_field('video_titulo')) : ?>
    <h3><?php the_field('video_titulo'); ?></h3>
<?php endif; ?>

<?php if (get_field('video_descripcion')) : ?>
    <p><?php the_field('video_descripcion'); ?></p>
<?php endif; ?>

<?php if (get_field('video_link')) : ?>
    <a href="<?php the_field('video_link'); ?>">Ver más →</a>
<?php endif; ?>