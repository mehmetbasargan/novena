<article <?php post_class('section about'); ?> id="about-<?php the_ID(); ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <?php $image1 = get_theme_mod('about_image_1', 'about_image_1', true); ?>
                    <img src="<?php echo esc_url($image1); ?>" alt="" class="img-fluid" />

                    <?php $image2 = get_theme_mod('about_image_2', 'about_image_1', true); ?>
                    <img src="<?php echo esc_url($image2); ?>" alt="" class="img-fluid mt-4" />
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <?php $image3 = get_theme_mod('about_image_3', 'about_image_2', true); ?>
                    <img src="<?php echo esc_url($image3); ?>" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">
                        <?php echo get_theme_mod('about_big_title'); ?>
                    </h2>
                    <p class="mt-4 mb-5">
                        <?php echo get_theme_mod('about_text_content'); ?>
                    </p>
                    <?php $about_link = get_theme_mod('about_button_link'); ?>
                    <a href="<?php echo site_url($about_link); ?>" class="btn btn-main-2 btn-round-full btn-icon">
                        <?php echo get_theme_mod('about_button_title'); ?>
                        <i class="icofont-simple-right ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>