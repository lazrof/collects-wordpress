<!-- footer -->
<?php 
$site_logo = get_field('logo', 'options');
$site_name = esc_attr( get_bloginfo( 'title' ) ); ?>

<footer>
    <div class="container__footer">
        <div class="row box__footer">
            <div class="col-12 col-md-4 logo-bottom">
                <?php if ($site_logo): ?>
                <img src="<?php echo $site_logo ?>" alt="<?php echo $site_name ?>">
                <?php endif; ?>
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
                                $link = get_sub_field('url');
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
        <?php the_field('attention_text', 'options') ?>
        <p class="copy">Copyright © <?php echo date('Y'); ?> <b>Collets</b></p>
    </div>
</footer>