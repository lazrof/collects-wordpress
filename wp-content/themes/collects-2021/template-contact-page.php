<?php
/*
* Template Name: Contact page New
*/


get_header(); ?>

<main id="primary">
    <div class="container-fluid p-0">
        <?php if ( have_posts() ) : ?>	
            <?php while ( have_posts() ) : the_post();?>
            
                <?php 
                
                get_template_part('template-parts/partials/banner');
                get_template_part('template-parts/partials/contact-info');

                $form_shortcode = get_field('form_shortcode'); ?>

                <?php if ($form_shortcode): ?> 
                    <div class="_contact-form _contact-container">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                 <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main><!-- #main -->



<?php get_footer(); ?>
