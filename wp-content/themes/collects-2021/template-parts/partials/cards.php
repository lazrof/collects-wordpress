<?php if( have_rows('services') ): ?>

<div class="_cards row">

    <?php while( have_rows('services') ): the_row();?>
        <?php 
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        
        ?>
        <div class="_card col-6 col-md-2">
            <div class="icon">
                <img src="<?php echo $image ?>" alt="<?php echo $title ?>">
            </div>
            <h3><?php echo $title ?></h3>
        </div>
    <?php endwhile; ?>
</div>

<?php endif; ?>