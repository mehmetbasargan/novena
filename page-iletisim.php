<?php get_header(); ?>
<?php $images = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="page-title" style="background: url(<?php echo $images['0']; ?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">
                        <?php echo the_title(); ?>
                    </span>
                    <h1 class="text-capitalize mb-5 text-lg">
                        <?php echo the_title(); ?>
                    </h1>
                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item">
                            <a href="<?php echo home_url('/'); ?>" class="text-white">
                                <?php esc_html_e('Ana Sayfa'); ?>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <span class="text-white"><i class="icofont-simple-right"></i></span>
                        </li>
                        <li class="list-inline-item">
                            <span class="text-white-50"><?php echo the_title(); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contact-info pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5><?php echo get_theme_mod('contact_phone_title', 'novena'); ?></h5>
                    <?php echo get_theme_mod('contact_phone_number', 'novena'); ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5><?php echo get_theme_mod('contact_email_title', 'novena'); ?></h5>
                    <?php echo get_theme_mod('contact_email_text', 'novena'); ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5><?php echo get_theme_mod('contact_address_title', 'novena'); ?></h5>
                    <?php echo get_theme_mod('contact_address_text', 'novena'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2"><?php echo get_theme_mod('contact_page_title', 'novena'); ?></h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5"><?php echo get_theme_mod('contact_page_text', 'novena'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <!-- Contact Form 7 -->
                <?php echo do_shortcode('[contact-form-7 id="337" title="İletişim Formu" html_class="contact__form"]'); ?>
                <!-- Contact Form 7 -->

            </div>
        </div>
    </div>
</section>

<div class="google-map ">
    <div class="map">
        <?php echo get_theme_mod('contact_page_map', 'novena'); ?>
    </div>
</div>

<?php get_footer(); ?>