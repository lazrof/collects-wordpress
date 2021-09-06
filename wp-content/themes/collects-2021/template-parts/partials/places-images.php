<?php if( have_rows('places_images') ): ?>

<div class="places">
    <?php while( have_rows('places_images') ): the_row();?>
        <?php 
        $image = get_sub_field('image');
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        
        ?>
        
        <div class="place-container">
            <div class="place">
                <img src="<?php echo $image ?>" alt="Place">
                <div class="info">
                    <img class="img-fluid" src="<?php echo $icon ?>" alt="Icon">
                    <h5><?php echo $title ?></h5>
                    <p><?php echo $content ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php endif; ?>