<article <?php post_class('section testimonial-2 gray-bg') ?> id="testimonial-<?php the_ID(); ?>">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2><?php echo get_theme_mod('testimonial_title'); ?></h2>
                    <div class="divider mx-auto my-4"></div>
                    <p><?php echo get_theme_mod('testimonial_text'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">

                <?php $settings = get_theme_mod('testimonia_repeater_setting', $defaults); ?>
                <?php foreach ($settings as $setting) : ?>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="<?php echo wp_get_attachment_url($setting['testimonial_img']); ?>" alt="" class="img-fluid" />
                        </div>
                        <div class="client-info">
                            <h4>
                                <?php echo $setting['testimonial_title']; ?>
                            </h4>
                            <span>
                                <?php echo $setting['testimonial_name']; ?>
                            </span>
                            <p>
                                <?php echo $setting['testimonial_text']; ?>
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</article>