<?php if( have_rows('brands') ): ?>

<div class="_brands">
    <?php while( have_rows('brands') ): the_row();?>
        <?php 
        $image = get_sub_field('image');
        
        ?>
        <div class="_brand">
            <img src="<?php echo $image ?>" alt="Brand">
        </div>
    <?php endwhile; ?>
</div>

<?php endif; ?>