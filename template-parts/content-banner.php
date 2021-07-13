<?php $image = get_theme_mod('banner_image', ''); ?>
<article <?php post_class('banner'); ?> id="banner-<?php the_ID(); ?>" style="background: url(<?php echo esc_url($image); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing">
                        <?php echo get_theme_mod('banner_little_title'); ?>
                    </span>
                    <h1 class="mb-3 mt-3">
                        <?php echo get_theme_mod('banner_big_title'); ?>
                    </h1>

                    <p class="mb-4 pr-5">
                        <?php echo get_theme_mod('banner_text'); ?>
                    </p>
                    <div class="btn-container">
                        <?php $btn_link = get_theme_mod('banner_button_link'); ?>
                        <a href="<?php echo site_url($btn_link); ?>" class="btn btn-main-2 btn-icon btn-round-full">
                            <?php echo get_theme_mod('banner_button_title'); ?> <i class="icofont-simple-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>