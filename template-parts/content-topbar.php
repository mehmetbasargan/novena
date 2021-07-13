<article <?php post_class('header-top-bar'); ?> id="top-bar-<?php the_ID(); ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="top-bar-info list-inline-item pl-0 mb-0">
                    <li class="list-inline-item">
                        <a href="mailto:<?php echo get_theme_mod('header_mail'); ?>">
                            <i class="icofont-support-faq mr-2"></i>
                            <?php echo get_theme_mod('header_mail'); ?>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <i class="icofont-location-pin mr-2"></i>
                        <?php echo get_theme_mod('header_address'); ?>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                    <a href="tel:+23-345-67890">
                        <span><?php esc_html_e('Hemen Arayın :', 'novena'); ?> </span>
                        <span class="h4"><?php echo get_theme_mod('header_phone'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>