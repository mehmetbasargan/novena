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

<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3"><?php echo get_theme_mod('appointmen_emergency_title', 'novena'); ?></span>
                    <h2 class="text-color fonts mt-3"><?php echo get_theme_mod('appointmen_emergency_phone', 'novena'); ?></h2>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color"><?php echo get_theme_mod('appointmen_page_title', 'novena'); ?></h2>
                    <p class="mb-4"><?php echo get_theme_mod('appointmen_page_text', 'novena'); ?></p>

                    <!-- Contact Form 7 -->
                    <?php echo do_shortcode('[contact-form-7 id="127" title="Online Randevu" html_class="appoinment-form"]'); ?>
                    <!-- Contact Form 7 -->

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>