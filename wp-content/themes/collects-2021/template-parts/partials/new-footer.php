<!-- footer -->
<?php 
$site_logo = esc_url( get_header_image() ) ? esc_url( get_header_image() ) : get_template_directory_uri() . '/img/logo-grande.PNG';
$site_name = esc_attr( get_bloginfo( 'title' ) ); ?>

<footer>
    <div class="container__footer">
        <div class="row box__footer">
            <div class="col-12 col-md-4 logo-bottom">
                <img src="<?php echo $site_logo ?>" alt="<?php echo $site_name ?>">
            </div>
            <div class="col-12 col-md-8">
                <div class="terms">
                    <?php the_field('text_menu', 'options') ?>
                </div>
                <div class="_social-media">
                    
                    <div class="first-content">
                    <?php if( have_rows('social_menu', 'options') ): ?>
                        <h2>Social Media</h2>
                        <div class="_links">
                            <?php while( have_rows('social_menu', 'options') ): the_row();?>
                                <?php
                                $icon = get_sub_field('icon'); 
                                $link = get_sub_field('link');
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a href="<?php echo $link['url'] ?>" target="<?php echo $link_target ?>">
                                    <img src="<?php echo $icon ?>" alt="<?php echo $link['title'] ?>">
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    
                    <?php if( have_rows('certificates', 'options') ): ?>
                        <div class="_logos">
                            <?php while( have_rows('certificates', 'options') ): the_row();?>
                            <?php $image = get_sub_field('image');  ?>
                                <img src="<?php echo $image ?>" alt="Certificate">
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        
    </div>

    <div class="box__copyright">
        <!-- <p class="text">For the latest travel advice from the Foreign & Commonwealth Office including security and local laws, plus passport and visa information, click visit http://www.gov.uk/foreign-travel-advice. You may also wish to visit the Travel Aware website, which can be found here: https://travelaware.campaign.gov.uk. We recommend that you consult these websites before booking in order to make an informed decision about your chosen destination, and again before departure.</p>
        <hr>
        <p class="text">Some of the flights and flight-inclusive holidays on this website are financially protected by the ATOL scheme. But ATOL protection does not apply to all holiday and travel services listed on this website. This website will provide you with information on the protection that applies in the case of each holiday and travel service offered before you make your booking. If you do not receive an ATOL Certificate then the booking will not be ATOL protected. If you do receive an ATOL Certificate but all the parts of your trip are not listed on it, those parts will not be ATOL protected. Please see our booking conditions for information or for more information about financial protection and the ATOL Certificate go to: www.caa.co.uk</p> -->
        <?php the_field('attention_text', 'options') ?>
        <p class="copy">Copyright © <?php echo date('Y'); ?> <b>Collets</b></p>
    </div>
</footer>