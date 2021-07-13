<article <?php post_class('section clients'); ?> id="clients-<?php the_ID(); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2><?php echo get_theme_mod('clients_title'); ?></h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>
                        <?php echo get_theme_mod('clients_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">

            <?php $settings = get_theme_mod('clients_repeater_setting', $defaults); ?>
            <?php foreach ($settings as $setting) : ?>

                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="<?php echo wp_get_attachment_url($setting['clients_img']); ?>" alt="" class="img-fluid" />
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</article>