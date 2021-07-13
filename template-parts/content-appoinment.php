<article <?php post_class('section appoinment mt-5'); ?> id="appoinment-<?php the_ID(); ?>">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="appoinment-content">
                    <?php $image = get_theme_mod('appointment_image', 'about_image_2'); ?>
                    <img src="<?php echo esc_url($image); ?>" alt="" class="img-fluid" />
                    <div class="emergency">
                        <h2 class="text-lg">
                            <i class="icofont-phone-circle text-lg"></i>
                            <?php echo get_theme_mod('appointment_phone'); ?>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-10">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">
                        <?php echo get_theme_mod('appointment_title'); ?>
                    </h2>
                    <p class="mb-4"> <?php echo get_theme_mod('appointment_text'); ?></p>

                    <!-- Contact Form 7 -->
                    <?php echo do_shortcode('[contact-form-7 id="127" title="Online Randevu" html_class="appoinment-form"]'); ?>
                    <!-- Contact Form 7 -->

                </div>
            </div>

        </div>
    </div>
</article>