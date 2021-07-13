<article <?php post_class('section service gray-bg'); ?> id="service-<?php the_ID(); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2><?php echo get_theme_mod('services_title'); ?></h2>
                    <div class="divider mx-auto my-4"></div>
                    <p><?php echo get_theme_mod('services_text'); ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $settings = get_theme_mod('home_services_repeater_setting'); ?>
            <?php foreach ($settings as $setting) : ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="<?php echo $setting['services_icon']; ?>  text-lg"></i>
                            <h4 class="mt-3 mb-3">
                                <?php echo $setting['services_title']; ?>
                            </h4>
                        </div>

                        <div class="content">
                            <p class="mb-4"> <?php echo $setting['services_text']; ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</article>