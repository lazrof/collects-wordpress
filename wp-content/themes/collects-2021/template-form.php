<?php
/*
* Template Name: Colletts Form
*/


get_header(); ?>

<main id="primary">
    <div class="container-fluid p-0">
        <?php if ( have_posts() ) : ?>	
            <?php while ( have_posts() ) : the_post();?>
            
                <?php  get_template_part('template-parts/partials/banner'); ?>
                
                <div class="container px-3 px-md-0 py-5">
                    <?php the_content(); ?>
                </div>

                <?php $form_shortcode = get_field('form_shortcode'); ?>
                <?php if ($form_shortcode): ?> 
                    <div class="_contact-form container p-3 p-md-0">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                 <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main><!-- #main -->



<?php get_footer(); ?>
