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

<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="title-color">
                    <?php echo get_theme_mod('about_title'); ?>
                </h2>
            </div>
            <div class="col-lg-8">
                <p><?php echo get_theme_mod('about_text'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4">
                        <?php echo get_theme_mod('doctors_title'); ?>
                    </h2>
                    <div class="divider mx-auto my-4"></div>
                    <p><?php echo get_theme_mod('doctors_text'); ?></p>
                </div>
            </div>
        </div>

        <div class="row">

            <?php $settings = get_theme_mod('doctors_repeater_setting'); ?>
            <?php foreach ($settings as $setting) : ?>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-block mb-5 mb-lg-5">
                        <img src="<?php echo wp_get_attachment_url($setting['doctors_img']); ?>" alt="" class="img-fluid w-100" />
                        <div class="content">
                            <h4 class="mt-4 mb-0">
                                <span>
                                    <?php echo $setting['doctors_name']; ?>
                                </span>
                            </h4>
                            <p> <?php echo $setting['doctors_title']; ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>