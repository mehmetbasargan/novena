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

<section class="section service-2">
    <div class="container">
        <div class="row">

            <?php $settings = get_theme_mod('services_repeater_setting', $defaults); ?>
            <?php foreach ($settings as $setting) : ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="<?php echo wp_get_attachment_url($setting['services_img']); ?>" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color"><?php echo $setting['services_title']; ?></h4>
                            <p class="mb-4"><?php echo $setting['services_text']; ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="section cta-page" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="cta-content">
                    <div class="divider mb-4"></div>
                    <h2 class="mb-5 text-lg">
                        <?php echo get_theme_mod('get_appointment_title'); ?>
                    </h2>

                    <?php $appointment_link = get_theme_mod('get_appointment_button_link'); ?>
                    <a href=" <?php echo site_url($appointment_link); ?>" class="btn btn-main-2 btn-round-full">
                        <?php echo get_theme_mod('get_appointment_button'); ?> <i class="icofont-simple-right  ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>