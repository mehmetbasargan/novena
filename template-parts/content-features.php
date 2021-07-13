<article <?php post_class('features'); ?> id="features-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>
                            <?php echo get_theme_mod('appointment_litle_title'); ?>
                        </span>
                        <h4 class="mb-3">
                            <?php echo get_theme_mod('appointment_big_title'); ?>
                        </h4>
                        <p class="mb-4">
                            <?php echo get_theme_mod('appointment_text_content'); ?>
                        </p>
                        <?php $button_link = get_theme_mod('appointment_button_link'); ?>
                        <a href="<?php echo site_url($button_link); ?>" class="btn btn-main btn-round-full">
                            <?php echo get_theme_mod('appointment_button_title'); ?>
                        </a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4"><i class="icofont-ui-clock"></i></div>
                        <span>
                            <?php echo get_theme_mod('appointment_litle_title_2'); ?>
                        </span>
                        <h4 class="mb-3">
                            <?php echo get_theme_mod('appointment_big_title_2'); ?>
                        </h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">
                                <?php esc_html_e('Pzt - Çar :', 'novena'); ?> <span> <?php echo get_theme_mod('appointment_hour_1'); ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <?php esc_html_e('Per - Cum :', 'novena'); ?> <span><?php echo get_theme_mod('appointment_hour_2'); ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <?php esc_html_e('Cmt - Paz :', 'novena'); ?> <span><?php echo get_theme_mod('appointment_hour_3'); ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4"><i class="icofont-support"></i></div>
                        <span>
                            <?php echo get_theme_mod('appointment_litle_title_3'); ?>
                        </span>
                        <h4 class="mb-3">
                            <?php echo get_theme_mod('appointment_big_title_3'); ?>
                        </h4>
                        <p><?php echo get_theme_mod('appointment_text_content_2'); ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</article>