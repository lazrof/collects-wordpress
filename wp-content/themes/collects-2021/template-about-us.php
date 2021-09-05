<?php
/*
* Template Name: About us
*/


get_header(); ?>

<main id="primary">
    <div class="container-fluid p-0">
        <?php if ( have_posts() ) : ?>	
            <?php while ( have_posts() ) : the_post();?>
            
                <?php 
                
                get_template_part('template-parts/partials/banner');
                get_template_part('template-parts/partials/cards');
                get_template_part('template-parts/partials/text-blocks');
                get_template_part('template-parts/partials/text-fullwidth');
                get_template_part('template-parts/partials/brands-fullwidth');

                ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main><!-- #main -->



<?php get_footer(); ?>
