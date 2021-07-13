<article <?php post_class('cta-section mt-5'); ?> id="counter-<?php the_ID(); ?>">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3"><?php echo get_theme_mod('counter_number_1'); ?></span>k
                        <p><?php echo get_theme_mod('counter_text_1'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3"><?php echo get_theme_mod('counter_number_2'); ?></span>+
                        <p><?php echo get_theme_mod('counter_text_2'); ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3"><?php echo get_theme_mod('counter_number_3'); ?></span>+
                        <p><?php echo get_theme_mod('counter_text_3'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3"><?php echo get_theme_mod('counter_number_4'); ?></span>
                        <p><?php echo get_theme_mod('counter_text_4'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>