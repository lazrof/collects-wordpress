
<div class="owl-carousel slider-banner">
    <div class="item">
        <img src="<?php echo get_template_directory_uri() . '/img/santorini.jpeg' ?>" alt="">
    </div>
    <div class="item">
        <img src="<?php echo get_template_directory_uri() . '/img/santorini.jpeg' ?>" alt="">
    </div>
    <div class="item">
        <img src="<?php echo get_template_directory_uri() . '/img/santorini.jpeg' ?>" alt="">
    </div>
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
