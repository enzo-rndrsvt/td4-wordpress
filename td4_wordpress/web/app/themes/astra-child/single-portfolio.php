<?php
get_header();
?>
<div class="portfolio-container">
    <div class="portfolio-grid">
        <?php $galerie = get_field('galerie'); ?>
            <div class="portfolio-item">
                <h2><?php the_title(); ?></h2>
                <img src="<?php echo $galerie[0]['url']; ?>" alt="">
                <p><?php echo get_field('description'); ?></p>
                <p><?php echo get_field('date'); ?> - <?php echo get_field('client'); ?></p>
                <p><?php echo get_field('tech'); ?></p>
                <a href="<?php echo get_field('lien') ?>" target="_blank">Voir le projet</a>
            </div>
    </div>
</div>
<?php
get_footer();
?>