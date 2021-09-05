<?php
/*
* Template Name: Home
*/


get_header(); ?>

<main id="primary">
    <div class="container-fluid p-0">
        <?php if ( have_posts() ) : ?>	
            <?php while ( have_posts() ) : the_post();?>
            
                <?php 
                
                get_template_part('template-parts/partials/slider-banner');
                get_template_part('template-parts/partials/half-width');
                get_template_part('template-parts/partials/places-images');

                ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main><!-- #main -->



<?php get_footer(); ?>
