<?php if( have_rows('slider_banner') ): ?>

<div class="owl-carousel slider-banner">
    <?php while( have_rows('slider_banner') ): the_row();?>
        
        <?php $image = get_sub_field('image');?>
        <div class="item">
            <img src="<?php echo $image ?>" alt="Banner Image">
        </div>
        
    <?php endwhile; ?>
</div>



<script>
jQuery( document ).ready(function() {

    jQuery(".owl-carousel").owlCarousel({
        dots:true,
        margin: 20,
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items:1,
                nav: false
            }
        }
    });

});

</script>

<?php endif; ?>