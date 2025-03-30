<?php
get_header();
?>
<div class="portfolio-container">
    <div class="portfolio-grid">
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post(); 
            
            $galerie = get_field('galerie');
            ?>
            <div class="portfolio-item">
                <h2><?php the_title(); ?></h2>
                <img src="<?php echo $galerie[0]['url']; ?>" alt="">
                <a href="<?php the_permalink(); ?>">En savoir plus -></a>
            </div>
        <?php 
            endwhile;
        else :
            echo '<p>Aucun projet</p>';
        endif; 
        ?>
    </div>
</div>
<?php
get_footer();
?>