<?php
/*
* Template Name: Contact page
*/


get_header(); ?>

<main id="primary">
    <div class="container-fluid p-0">
        <?php if ( have_posts() ) : ?>	
            <?php while ( have_posts() ) : the_post();?>
            
                <?php 
                
                get_template_part('template-parts/partials/banner');
                get_template_part('template-parts/partials/contact-info');


                ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main><!-- #main -->



<?php get_footer(); ?>
